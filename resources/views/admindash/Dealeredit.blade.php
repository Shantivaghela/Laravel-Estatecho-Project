@extends('admindash.adminlayout')

@section('title'.'User details')

@section('content')

<div class="pt-5">
<section class="card2 rounded text-center ">
@if (Session::has('success'))
                        <script>
                             swal("Messsage","{{ Session::get('success') }}",'success',{
                            button:true,
                            button:"ok",
                        });
                        </script>
                       
 @endif
 <form action="/admindash/{{$dealer->id}}/Dealersave/" method="POST" class="mx-auto size" enctype="multipart/form-data">
                 @csrf
                    
                    @method('PUT')
                <h4 class="text-center">Dear Edit</h4>
               
               
                <div class="mb-3 mt-5">
                   <label for="exampleInputPassword1" class="form-label">Photo:  </label>
                   <input type="file" class=" bg-info text-white form-control" name="DealerPhoto" >
                   @if ($errors->has('DealerPhoto'))
                     <p class="text-danger">{{ $errors->first('DealerPhoto')}}<p>
                   @endif
                  <label for="exampleInputEmail1" class="form-label">Dealer Name: </label>
                  <input type="text" class=" bg-info text-white form-control" aria-describedby="emailHelp" name="name" value="{{$dealer->name}}">
                  @if ($errors->has('name'))
                    <p class="text-danger">{{ $errors->first('name')}}<p>
                  @endif
                  <label for="exampleInputEmail1" class="form-label">Contact No: </label>
                  <input type="text" class=" bg-info text-white form-control" aria-describedby="emailHelp" name="contact" value="{{$dealer->contact}}">
                  @if ($errors->has('contact'))
                    <p class="text-danger" >{{ $errors->first('contact')}}<p>
                  @endif
                  <button type="submit" class="btn btn-primary mt-4" >Update</button>
    </form>
               
       
</section>
</div>      





@endsection
