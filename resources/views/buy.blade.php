@extends('master')

@section('title'.'Buy')

@section('condent')

        <main>
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">

                            <h2 class="mb-0">For Selling</h2>
                        </div>

                    </div>
                </div>
            </header>
            

            <section class="about-section section-padding" id="section_2">
            <div class="col-lg-12 col-12">
                            <div class="pb-5 mb-5">
                                <div class="section-title-wrap mb-4">
                                    <h4 class="section-title">Buy your best property</h4>
                                </div>
                            </div>
            </div>
            <div class=" mb-4 mb-lg-0 mt-3">
            @if (Session::has('success'))
                        <script>
                             swal("Messsage","{{ Session::get('success') }}",'success',{
                            button:true,
                            button:"ok",
                        });
                        </script>
            @endif
                <div class="grid">
                    @foreach($propertys as $req)
                    <div class="custom-block d-flex ">
                    <div class="">
                                <div class="custom-block-icon-wrap">
                                        <div class="section-overlay"></div>
                                        <a href="/more/{{$req->id}}" class="custom-block-image-wrap">
                                            <img src="properyimg/{{$req->prophoto}}" class="custom-block-image img-fluid" alt="">
                                         </a>
                                           
                                    </div>

                                    <div class="mt-2">
                                        <a href="https://wa.me/91{{$req->contact}}" class="btn custom-btn">
                                            Contact
                                        </a>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    <div class="custom-block-top d-flex mb-1">
                                        <small class="me-4">
                                            Property Name:
                                        </small>
                                    </div>

                                    <h3><strong>{{$req->property}}</strong></h3>

                                    <div class="profile-block d-flex ">
                                        <img src="profileimg/{{$req->image}}" class="profile-block-image img-fluid" alt="">

                                        <p><small>Owner Name:</small>
                                            <strong>{{$req->name}}</strong></p>
                                    </div>

                                    

                                    <div class="custom-block-bottom d-flex justify-content-between">
                                        <p class="mb-1 mt-0"><strong>Price: </strong>{{$req->price}} ₹</p>
                                    </div>
                                    <div class="dcustom-block-bottom d-flex justify-content-between">
                                    <p class="me-auto"><strong>Location: </strong>{{$req->location}}</p>
                                    </div>
                                </div>
                        
                               
                                <div class="d-flex flex-column ms-auto">
                                    <form action="{{url('cart',$req->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <button type="submit" class="badge ms-auto">
                                            <i class="bi-bookmark"></i>
                                        </button>
                                        
                                    </form>
                                </div>
                            
                        
                                </div>
             @endforeach
                            
                        </div>
                    </div>
                </div>
            </section>
        </main>
 @endsection