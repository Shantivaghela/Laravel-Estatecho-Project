@extends('admindash.adminlayout')

@section('title'.'Adminpanel')

@section('content')

<div class="pt-5 pb-3">
    <section class="card2 rounded  ">
    <h3 class="text-center text-dark">Dashboard</h3>
    <h5 class="float-left mb-4 m-3" >User info...</h5>
    <hr>
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
                        <th scope="col">Last update</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $users)
                        <tr>
                        <th scope="row">{{ $loop-> index+1}}</th>
                        <td><img src="profileimg/{{$users->image}}"  width="50" height="50" class="profileimg rounded-circle" alt=""></td>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->updated_at->format('d/m/Y')}}</td>
                        </tr>
                     @endforeach  
                    </tbody>
                </table>




       
</section>
<section class="card2 rounded  ">
    <h5 class="float-left mb-4 m-3" >Property info...</h5>
    <hr>
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
                        <th scope="col">Owner Name</th>
                        <th scope="col">Property Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Contact no</th>
                        <th scope="col">Location</th>
                        <th scope="col">Last update</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($proprtys as $proprty)
                        <tr>
                        <th scope="row">{{ $loop-> index+1}}</th>
                        <td><img src="properyimg/{{$proprty->prophoto}}"  width="50" height="50" class="profileimg rounded-circle" alt=""></td>
                        <td>{{ $proprty->name }}</td>
                        <td>{{ $proprty->property }}</td>
                        <td>{{ $proprty->price }}</td>
                        <td>{{ $proprty->contact }}</td>
                        <td>{{ $proprty->location }}</td>
                        <td>{{ $proprty->updated_at->format('d/m/Y')}}</td>
                        </tr>
                     @endforeach  
                    </tbody>
                </table>




       
</section>
<section class="card2 rounded  ">
    
    <h5 class="float-left mb-4 m-3" >Dealer info...</h5>
    <hr>
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
                        <th scope="col">Contact no</th>
                       
                        <th scope="col">Last update</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dealers as $dealer)
                        <tr>
                        <th scope="row">{{ $loop-> index+1}}</th>
                        <td><img src="Dealers/{{$dealer->DealerPhoto}}"  width="50" height="50" class="profileimg rounded-circle" alt=""></td>
                        <td>{{ $dealer->name }}</td>
                        <td>{{ $dealer->contact }}</td>
                        <td>{{ $dealer->updated_at->format('d/m/Y')}}</td>
                        </tr>
                     @endforeach  
                    </tbody>
                </table>




       
</section>
</div>
        
        





@endsection
