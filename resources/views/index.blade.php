@extends('master')

@section('title'.'Home')

@section('condent')


<main>

        <section class="hero-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-2">
                        @if (Session::has('success'))
                        <script>
                             swal("Messsage","{{ Session::get('success') }}",'success',{
                            button:true,
                            button:"ok",
                        });
                        </script>
                       
                        @endif
                        @if (Session::has('error'))
                                <script>
                                            swal("Messsage","{{ Session::get('error') }}",'info',{
                                            button:true,
                                            button:"ok",
                                            dangerMode:true,

                                        });
                                </script>
                         @endif
                            <h1 class="text-white">List Your Property</h1>

                            <p class="text-white">List and become a part of EstateEcho.</p>
                       
                            <a href="{{route('list')}}" class="btn custom-btn smoothscroll mt-3">Start listening</a>

                        </div>
                        <div class="text-center mb-5 pb-2">
                            <h2 class="text-white">Our Best Dealers</h2>

                        </div>
                        
                        <div class="owl-carousel owl-theme">
                            @foreach($dealers as $dealer)
                
                            <div class="owl-carousel-info-wrap item ">
                                <div>
                                <img src="Dealers/{{$dealer->DealerPhoto}}" class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2"> {{$dealer->name}}
                                    </h4>

                                    <span class="badge">Dealer</span>
                                </div>

                                <div class="social-share">
                                    <ul class="social-icon">
                                        
                                        <li class="social-icon-item">
                                            <a href="https://wa.me/91{{$dealer->contact}}" class="social-icon-link bi-whatsapp"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                           
                            


                            
                        </div>
                    </div>

                </div>
            </div>

            <section class="trending-podcast-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">Trending listing</h4>
                            </div>
                        </div>
                        
                        
                        @foreach($propertys as $pro)
                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href="/more/{{$pro->id}}">
                                        <img src="properyimg/{{$pro->prophoto}}" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="custom-block-info">
                                    <h5 class="mb-2 text-info">
                                        {{$pro->property}}
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <img src="profileimg/{{$pro->image}}" class="profile-block-image img-fluid" alt="">

                                        <p>{{$pro->name}}
                                            <strong>₹{{$pro->price}}
                                            </strong>
                                        </p>
                                    </div>
                                    
                                    <p class="me-auto"><strong>Location:  {{$pro->location}} </strong></p>
                                    <p class="me-auto"><strong>Type:  {{$pro->select}} </strong></p>
                                    
                                </div>
                                
                                <div class="social-share d-flex flex-column ms-auto">
                                    <form action="{{url('cart',$pro->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                        
                                        <button type="submit" class="badge ms-auto">
                                            <i class="bi-bookmark"></i>
                                        </button>
                                        
                                    </form>
                                    
                                </div>
                                <div class="ms-12">
                                    <a href="https://wa.me/91{{$pro->contact}}"
                                    class="btn custom-btn custom-border-btn smoothscroll">Contact</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
    </main>
    @endsection