@extends('admindash.adminlayout')

@section('title'.'Messages')

@section('content')

<div class="pt-5">
<section class="card2 rounded ">
<h3 class="text-center text-dark mb-5">Messages</h3>
                        @if (Session::has('success'))
                                <script>
                                    swal("Messsage","{{ Session::get('success') }}",'success',{
                                    button:true,
                                    button:"ok",
                                });
                        </script>
                       
                        @endif
        @foreach($messages as $mess)
                <div class=" p-3">
                    <div class="mb-2">
                    <p class="mb-2"><strong>Name: </strong>{{$mess->name}}</p> 
                    <p ><strong>Email: </strong>{{$mess->email}}</p>
                    </div>
                    <p class="mb-2"><strong>Reason: </strong>{{$mess->reason}}</p>
                    <p ><strong>Message: </strong>{{$mess->message}}</p>
                    <div>
                    <form action="/admindash/{{$mess->id}}/messdelete/" method="POST" enctype="multipart/form-data" class="float-md-right">
                                        @csrf
                                                            
                                        @method('DELETE')                  
                                        <button type="submit"  class="btn btn-danger btn-sm my-3 ">Delete</button>

                                        
                    </form>
                    </div>
                    <hr>
                </div>
        @endforeach

</section>
</div>        





@endsection
