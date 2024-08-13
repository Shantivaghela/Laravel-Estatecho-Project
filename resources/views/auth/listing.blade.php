<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/stylel.css" rel="stylesheet" >
    <link href="css/templatemo-pod-talk.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/java.js" rel="javascript" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
      .swal-text{
          color: #000000;
      }
    </style>

            <title>Listing page
    </title>
  </head>
  <body>
  
      <div class="container-fluid">
     

  
    <div class="row justify-content-center">
        <div class=" col-lg-6 col-md-8">
            <div class="card p-3">
                <div class="row justify-content-center">
 
 
                <div class="col-12">
                    <div  class="col-12">
                             <a href="{{URL::to('/index')}}">
                                <img src="images/logo.png" alt="Estateecho">
                            </a>
                    </div>
                        <h2 class="heading text-center">Listing Form</h2>
                    </div>
                </div>
                <form action="/listing" method="POST" class="form-card" enctype="multipart/form-data">

                    @csrf
                    
                    
                    <div class="row justify-content-center form-group">
                    @if (Session::has('success'))
                        <script>
                             swal("Messsage","{{ Session::get('success') }}",'success',{
                            button:true,
                            button:"ok",
                        });
                        </script>
                       
                        @endif
                        <div class="col-12 px-auto">
                            <div class="custom-control custom-radio custom-control-inline"> <input id="customRadioInline1" type="radio" name="select" class="custom-control-input" value="sell" checked> <label for="customRadioInline1" class="custom-control-label label-radio">Selling</label> </div>
                            <div class="custom-control custom-radio custom-control-inline"> <input id="customRadioInline2" type="radio" name="select" class="custom-control-input" value="rent" > <label for="customRadioInline2" class="custom-control-label label-radio">Rent</label> </div>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> <input type="text" id="cr_no" name="property" placeholder="Property"> <label>Enter Your Property Name</label> </div>
                            @if ($errors->has('property'))
                              <p class="text-danger">{{ $errors->first('property')}}<p>
                            @endif
                        </div>
                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group"> <input type="text" name="price" placeholder="Price"> <label>Enter Your Property Price</label> </div>
                                    @if ($errors->has('price'))
                                    <p class="text-danger">{{ $errors->first('price')}}<p>
                                @endif
                                </div>
                               
                                <div class="col-6">
                                    <div class="input-group"> <input type="text" name="contact" placeholder="Contact Number"> <label>Contact</label> </div>
                                    @if ($errors->has('contact'))
                                    <p class="text-danger">{{ $errors->first('contact')}}<p>
                                @endif
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> <input type="text" id="cr_no" name="location" placeholder="Location"> <label>Enter Location</label> </div>
                            @if ($errors->has('location'))
                              <p class="text-danger">{{ $errors->first('location')}}<p>
                            @endif
                        </div>
                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                <label for="formFileLg" class="form-label">Upload Your Property Photo</label>
                                <input class="form-control form-control-lg" type="file" name="prophoto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"><textarea name="message" placeholder="Write About Your Property" cols="30" rows="5"></textarea></div>
                            @if ($errors->has('message'))
                            <p class="text-danger">{{ $errors->first('message')}}<p>
                        @endif
                        </div>
                        
                    </div>
                    <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary mt-5" >Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  </body>
</html>