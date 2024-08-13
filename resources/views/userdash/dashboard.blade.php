@extends('userdash.dashlayout')

@section('title'.'userdsah')

@section('content')


<section class="card1 rounded text-center">
@if (Session::has('success'))
                        <script>
                             swal("Messsage","{{ Session::get('success') }}",'success',{
                            button:true,
                            button:"ok",
                        });
                        </script>
                       
                        @endif
        <div class="card-body">
            <h5 class="card-title my-3"> User Profile</h5>
            <p class="card-text my-3"><img src="profileimg/{{$user->image}}"  width="80" height="80" class="profileimg rounded-circle me-3" alt=""></p>
            <p class="card-text my-3"><strong>Name: </strong>{{$user->name}}</p>
            <p class="card-text my-3"><strong>Email: </strong>{{$user->email}}</p>
            <p class="card-text my-3"><strong>Password: </strong>*****</p>
            <a href="profileedit" class="btn btn-primary  my-3 ">Edit
            </a>
            <form action="/userdash/{{$user->id}}/delete/" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit"  class="btn btn-danger my-3 ">Delete</button>
            </form>
        </div>




       
</section>
        





@endsection
