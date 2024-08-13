@extends('userdash.dashlayout')

@section('title'.'cartdash')

@section('content')



<section class="about-section section-padding index" >
            <div class="col-lg-12 col-12">
                            <div class="pb-5 mb-5">
                                <div class="section-title-wrap mb-4 mt-5">
                                    <h4 class="section-title">Your Cart list
                                    </h4>
                                </div>
                            </div>
            </div>
            @if (Session::has('success'))
                        <script>
                             swal("Messsage","{{ Session::get('success') }}",'success',{
                            button:true,
                            button:"ok",
                        });
                        </script>
                       
                        @endif
            <div class=" mb-4 mb-lg-0 mt-3">
                <div class="grid">
                    @foreach($carts as $req)
                    <div class="custom-block d-flex">
                    <div class="">
                                 <div class="custom-block-icon-wrap">
                                        <div class="section-overlay"></div>
                                        <a href="/more/{{$req->property_id}}" class="custom-block-image-wrap">
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
                                    <p class="mb-1 mt-0"><strong>Location: </strong>{{$req->location}}</p>
                                    </div>
                                    <div class="dcustom-block-bottom d-flex justify-content-between">
                                    <p class="mb-1 mt-0"><strong>Type: </strong>{{$req->select}}</p>
                                    </div>

                                </div>

                                
                                <form action="/userdash/{{$req->id}}/dcart/" method="POST" class="d-inline d-flex flex-column ms-auto icon">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"  class="icon1"><i class="bi bi-trash3-fill "></i></button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    </div>
                   
</section>
@if($carts->isEmpty())
                    <div class="text-center empty">
                        <h3>No data !!!</h3>
                    </div>
@endif

        





@endsection
