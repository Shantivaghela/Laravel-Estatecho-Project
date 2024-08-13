@extends('admindash.adminlayout')

@section('title'.'User details')

@section('content')

<div class="pt-5">
<section class="card2 rounded text-center ">
<h3 class="text-center text-dark mb-5">Users</h3>
@if (Session::has('success'))
                        <script>
                             swal("Messsage","{{ Session::get('success') }}",'success',{
                            button:true,
                            button:"ok",
                        });
                        </script>
                       
                        @endif
        
                <table class="table">
                    <thead>
                       
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $users)
                        <tr>
                        <th scope="row">{{ $loop-> index+1}}</th>
                        <td><img src="profileimg/{{$users->image}}"  width="50" height="50" class="profileimg rounded-circle" alt=""></td>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>
                            <a href="admindash/{{$users->id}}/userview/" class="btn btn-primary btn-sm">View</a>
                            <a href="admindash/{{$users->id}}/userupdate/" class="btn btn-success btn-sm mx-1">Update</a>
                            <form action="/admindash/{{$users->id}}/Udelete/" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-danger btn-sm my-3 ">Delete</button>
                            </form>
                        </td>
                        </tr>
                     @endforeach  
                    </tbody>
                </table>




       
</section>
</div>        





@endsection
