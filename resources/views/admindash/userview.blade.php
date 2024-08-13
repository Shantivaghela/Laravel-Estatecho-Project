@extends('admindash.adminlayout')

@section('title'.'User details')

@section('content')



<div class="about-section section-padding index" >
<div class="text-center card3">
<img src="{{ asset('profileimg/'.$users->image) }}"  width="180" height="180" class="profileimg rounded-circle" alt="">
<h5 class="mt-2">{{$users->name}}</h5>
</div>
            <div class="col-lg-12 col-12">
                            <div class="pb-5 mb-5">
                                <div class="section-title-wrap mb-4">
                                    <h4 class="section-title">User listed property</h4>
                                </div>
                            </div>
            </div>
        
            <table class="table text-light">
                    <thead>
                       
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Property Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Contact no</th>
                        <th scope="col">Location</th>
                        
                        
                        </tr>
                
                    </thead>
                    <tbody>
                    @foreach($listeduser as $sell)
                        <tr>
                        <th scope="row">{{ $loop-> index+1}}</th>
                        <td><img src="/properyimg/{{$sell->prophoto}}"  width="50" height="50" class="profileimg rounded-circle" alt=""></td>
                        <td>{{ $sell->property }}</td>
                        <td>{{ $sell->price }}</td>
                        <td>{{ $sell->contact }}</td>
                        <td>{{ $sell->location }}</td>
                        
                        
                        </tr>
                     @endforeach  
                    </tbody>
                </table>
</div>
@if($listeduser->isEmpty())
                    <div class="text-center empty">
                        <h3>No data !!!</h3>
                    </div>

@endif
<section class="about-section section-padding index" >
            <div class="col-lg-12 col-12">
                            <div class="pb-5 mb-5">
                                <div class="section-title-wrap mb-4">
                                    <h4 class="section-title">User rent property</h4>
                                </div>
                            </div>
            </div>
            <table class="table text-light">
                    <thead>
                       
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Property Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Contact no</th>
                        <th scope="col">Location</th>
                        
                        
                        </tr>
                
                    </thead>
                    <tbody>
                    @foreach($rentuser as $req)
                        <tr>
                        <th scope="row">{{ $loop-> index+1}}</th>
                        <td><img src="/properyimg/{{$req->prophoto}}"  width="50" height="50" class="profileimg rounded-circle" alt=""></td>
                        <td>{{ $req->property }}</td>
                        <td>{{ $req->price }}</td>
                        <td>{{ $req->contact }}</td>
                        <td>{{ $req->location }}</td>
                        
                        
                        </tr>
                     @endforeach  
                    </tbody>
                </table>
            

                   
</section>
@if($rentuser->isEmpty())
                    <div class="text-center empty">
                        <h3>No data !!!</h3>
                    </div>

@endif

<section class="about-section section-padding index" >
            <div class="col-lg-12 col-12">
                            <div class="pb-5 mb-5">
                                <div class="section-title-wrap mb-4 mt-5">
                                    <h4 class="section-title">User Cart list
                                    </h4>
                                </div>
                            </div>
            </div>
            <table class="table text-light">
                    <thead>
                       
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Property Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Contact no</th>
                        <th scope="col">Location</th>
                        
                        
                        </tr>
                
                    </thead>
                    <tbody>
                    @foreach($carts as $cart)
                        <tr>
                        <th scope="row">{{ $loop-> index+1}}</th>
                        <td><img src="/properyimg/{{$cart->prophoto}}"  width="50" height="50" class="profileimg rounded-circle" alt=""></td>
                        <td>{{ $cart->property }}</td>
                        <td>{{ $cart->price }}</td>
                        <td>{{ $cart->contact }}</td>
                        <td>{{ $cart->location }}</td>
                        
                        
                        </tr>
                     @endforeach  
                    </tbody>
                </table>
            
                   
</section>
@if($carts->isEmpty())
                    <div class="text-center empty">
                        <h3>No data !!!</h3>
                    </div>
@endif

@endsection
