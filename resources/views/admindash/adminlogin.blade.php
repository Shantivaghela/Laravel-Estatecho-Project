<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    <title>Loging form</title>
  </head>
  <body>
        <div class="container-fluid">
            <a href="{{URL::to('/index')}}">
                <img src="images/logo.png" alt="Estateecho">
            </a> 
            <form action="{{route('adminlogin')}}" method="POST" class="mx-auto">
           @csrf
                <h4 class="text-center">Admin Login</h4>
                @if (Session::has('success'))
                        <script>
                             swal("Messsage","{{ Session::get('success') }}",'success',{
                            button:true,
                            button:"ok",
                        });
                        </script>
                  @endif

                @if (Session::has('error'))
                <script>
                             swal("Messsage","{{ Session::get('error') }}",'warning',{
                            button:true,
                            button:"ok",
                            dangerMode:true,

                        });
                </script>
                  @endif
                <div class="mb-3 mt-5">
                  <label for="exampleInputEmail1" class="form-label">Enter Email</label>
                  <input type="email" class="form-control" name="email">
                  @if ($errors->has('email'))
                    <p class="text-danger">{{ $errors->first('email')}}<p>
                  @endif
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"> Password</label>
                  <input type="password" class="form-control" name="password">
                  @if ($errors->has('password'))
                    <p class="text-danger">{{ $errors->first('password')}}<p>
                  @endif
                </div>
                <button type="submit" class="btn btn-primary mt-5" >Login</button>
              </form>
        </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>