@extends('admindash.adminlayout')

@section('title'.'User details')

@section('content')

<div class=" pt-5">
<section class="card2 rounded text-center ">
@if (Session::has('success'))
                        <script>
                             swal("Messsage","{{ Session::get('success') }}",'success',{
                            button:true,
                            button:"ok",
                        });
                        </script>
                       
 @endif
 <form action="/save_dealers" method="POST" class="mx-auto size" enctype="multipart/form-data">
              @csrf
                <h4 class="text-center">Dears</h4>
               
               
                <div class="mb-3 mt-5">
                   <label for="exampleInputPassword1" class="form-label">Photo:  </label>
                   <input type="file" class=" bg-info text-white" name="DealerPhoto" >
                   @if ($errors->has('DealerPhoto'))
                     <p class="text-danger">{{ $errors->first('DealerPhoto')}}<p>
                   @endif
                  <label for="exampleInputEmail1" class="form-label">Dealer Name: </label>
                  <input type="text" class=" bg-info text-white" aria-describedby="emailHelp" name="name">
                  @if ($errors->has('name'))
                    <p class="text-danger">{{ $errors->first('name')}}<p>
                  @endif
                  <label for="exampleInputEmail1" class="form-label">Contact No: </label>
                  <input type="text" class=" bg-info text-white" aria-describedby="emailHelp" name="contact">
                  @if ($errors->has('contact'))
                    <p class="text-danger" >{{ $errors->first('contact')}}<p>
                  @endif
                  <button type="submit" class="btn btn-primary" >Add Dealer</button>
    </form>
                <table class="table mt-5">
                    <thead>
                       
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact no</th>
                        <th scope="col">Action</th>
                       
                        </tr>
                      </thead>
                      @foreach($dealers as $dealer)
                      <tr>
                      <th scope="row">{{ $loop-> index+1}}</th>
                      <td><img src="Dealers/{{$dealer->DealerPhoto}}"  width="50" height="50" class="profileimg rounded-circle" alt=""></td>
                      <td>{{ $dealer->name }}</td>
                      <td>{{ $dealer->contact }}</td>
                      <td>
  
                          <a href="admindash/{{$dealer->id}}/Dealerupdate/" class="btn btn-success btn-sm mx-1">Edit</a>
                          <form action="/admindash/{{$dealer->id}}/Dealerdelete/" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm my-3 ">Delete</button>
                          </form>
                      </td>
                      </tr>
                      @endforeach  
                    <tbody>
                   
                    </tbody>
                </table>
                @if($dealers->isEmpty())
                    <div class="text-center empty">
                        <h3>No Dealers yet</h3>
                    </div>

                @endif



       
</section>
        
</div>




@endsection
