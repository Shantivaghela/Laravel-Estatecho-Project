@extends('admindash.adminlayout')

@section('title'.'User details')

@section('content')



<div class="about-section section-padding index" >

            <div class="col-lg-12 col-12">
                            <div class="pb-5 mb-5">
                                <div class="section-title-wrap mb-4">
                                    <h4 class="section-title">Listed property</h4>
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
        
            <table class="table text-light">
                    <thead>
                       
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Owner Name</th>
                        <th scope="col">Property Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Contact no</th>
                        <th scope="col">Location</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                        
                        
                        </tr>
                
                    </thead>
                    <tbody>
                    @foreach($propertys as $sell)
                        <tr>
                        <th scope="row">{{ $loop-> index+1}}</th>
                        <td><img src="/profileimg/{{$sell->image}}"  width="50" height="50" class="profileimg rounded-circle" alt=""></td>
                        <td>{{ $sell->name }}</td>
                        <td>{{ $sell->property }}</td>
                        <td>{{ $sell->price }}</td>
                        <td>{{ $sell->contact }}</td>
                        <td>{{ $sell->location }}</td>
                        <td>{{ $sell->created_at->format('d/m/Y')}}</td>
                        <td> <form action="/userdash/{{$sell->id}}/buydelete/" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                                            
                                        @method('DELETE')                  
                                        <button type="submit" class="btn btn-danger" >
                                            <i class="bx bxs-trash-alt bx-md"></i>
                                        </button>
                                        
                        </form></td>
                        
                        
                        </tr>
                     @endforeach  
                    </tbody>
                </table>
</div>
@if($propertys->isEmpty())
                    <div class="text-center empty">
                        <h3>No data !!!</h3>
                    </div>

@endif
<div class="about-section section-padding index" >

</div>
            <div class="col-lg-12 col-12">
                            <div class="pb-5 mb-5">
                                <div class="section-title-wrap mb-4">
                                    <h4 class="section-title">Rented property</h4>
                                </div>
                            </div>
            </div>
        
            <table class="table text-light">
                    <thead>
                       
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Owner Name</th>
                        <th scope="col">Property Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Contact no</th>
                        <th scope="col">Location</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                        
                        
                        </tr>
                
                    </thead>
                    <tbody>
                    @foreach($property as $sell)
                        <tr>
                        <th scope="row">{{ $loop-> index+1}}</th>
                        <td><img src="/profileimg/{{$sell->image}}"  width="50" height="50" class="profileimg rounded-circle" alt=""></td>
                        <td>{{ $sell->name }}</td>
                        <td>{{ $sell->property }}</td>
                        <td>{{ $sell->price }}</td>
                        <td>{{ $sell->contact }}</td>
                        <td>{{ $sell->location }}</td>
                        <td>{{ $sell->created_at->format('d/m/Y')}}</td>
                        <td><form action="/userdash/{{$sell->id}}/buydelete/" method="POST" enctype="multipart/form-data" class="d-inline float-md-right">
                                        @csrf
                                                            
                                        @method('DELETE')                  
                                        <button type="submit" class="btn btn-danger ">
                                            <i class="bx bxs-trash-alt bx-md"></i>
                                        </button>
                                        
                        </form></td>
                        
                        
                        </tr>
                     @endforeach  
                    </tbody>
                </table>
</div>
@if($property->isEmpty())
                    <div class="text-center empty">
                        <h3>No data !!!</h3>
                    </div>

@endif

@endsection