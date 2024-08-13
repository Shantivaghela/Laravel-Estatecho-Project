@extends('userdash.dashlayout')

@section('title'.'editprofile')

@section('content')

<form action="/userdash/{{$user->id}}/update/" method="POST" enctype="multipart/form-data">
<div class="card1 rounded text-center">

        @csrf
        @method('PUT')
        <div class="card-body">
            <h5 class="card-title my-3"> Update Your Profile</h5>
            <div class="card-text my-3">
                <label for="exampleInputPassword1" class="form-label">Name :<input type="text" class="form-control" name="name" value="{{$user->name}}"></label>
                
            </div>
            
            <div class="card-text my-3">
                <label for="exampleInputPassword1" class="form-label">Email :<input type="email" class="form-control" name="email" value="{{$user->email}}"></label>
                
            </div>
            <div class="card-text my-3">
                <label for="exampleInputPassword1" class="form-label">Your photo :<input type="file" class="form-control" name="image" value="profileimg/{{$user->image}}"></label>
                
            </div>
            <div class="card-text my-3">
                <label for="exampleInputPassword1" class="form-label">Password :<input type="password"   id="myInput" class="form-control" name="password" value="{{$user->password}}"></label>
                
            </div>
            <input type="checkbox" onclick="myFunction()">Show Password
            
        </div>

        <button type="submit" class="btn btn-primary mt-2">Update</button>
     </div>

</form>      

   
           

        





@endsection
