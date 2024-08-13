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
    <link href="js/javadash.js" rel="javascript">
    <link href="{{asset('js/javadash.js')}}" rel="javascript">
    <style>
      .size{
        width:100%;
      }
    </style>
    <title>sing up Form</title>
  </head>
  <body>
      <div class="container-fluid size">
        <a href="{{URL::to('/index')}}">
                <img src="images/logo.png" alt="Estateecho">
            </a>  
            <form action="/singup" method="POST" class="mx-auto size" enctype="multipart/form-data">
              @csrf
                <h4 class="text-center">Sign up</h4>
               
               
                <div class="mb-3 mt-5">
                  <label for="exampleInputEmail1" class="form-label">Enter Name</label>
                  <input type="text" class="form-control"aria-describedby="emailHelp" name="name">
                  @if ($errors->has('name'))
                    <p class="text-danger">{{ $errors->first('name')}}<p>
                  @endif
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Enter Email</label>
                  <input type="email" class="form-control" name="email" >
                  @if ($errors->has('email'))
                    <p class="text-danger">{{ $errors->first('email')}}<p>
                  @endif
                </div>
                <div class=" mb-3">
                                <label for="formFileLg" class="form-label">Upload Your Photo</label>
                                <input class="form-control" type="file" name="image">
                                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Create Password</label>
                    <input type="password" class="form-control" name="password"  id="myInput">
                    <input class="mt-2" type="checkbox" onclick="myFunction()">Show Password
                    @if ($errors->has('password'))
                    <p class="text-danger">{{ $errors->first('password')}}<p>
                  @endif
                </div>
              
                <button type="submit" class="btn btn-primary mt-3">Singup</button>
              </form>
        </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/javadash.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>