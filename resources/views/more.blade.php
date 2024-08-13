<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/templatemo-pod-talk.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <title>Propertydetails</title>
    <style>
       body{
                    background:white;
                    background-image: url('../images/templatemo-wave-header.jpg'), linear-gradient(#348CD2, #edf3f7);;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;
                    min-height: 480px;
                    position: relative;
                    font-family: 'Poppins', sans-serif;

            }
            h5{
               
                margin-right:5px;
                color:black;
            }
            h3{
                margin-bottom:0.1rem;
                font-family:'Sono', sans-serif;
                color:#0066CC;
            }
            .name{
                font: left;
            }
            .card-body{
                display:grid;
                
            }
            .card-body p{
                margin-bottom:0.3rem;
            }
            .empty h3{
                color:grey;
                background:#dddada;
                font-family:none;
            
            }
            .logo-image{

                height:40px;
                width: 900px;
            }

            .profile{
                border:40px black;
                height: 50px;
                width: 50px;
                object-fit:cover;
                
            }
            .profileimg{
                object-fit:cover;
                border:2px black;
                height:500px;
                width: 500px;
                margin:20px;
                
            }
            .more1 p{
                margin-bottom:0.0rem;
            }
            .nav .nav-item .nav-link.active{
                color:blue;
            }
            .card1{
                margin:auto;
                background-color:white;
                width:1500px;
                height:550px;
                border:2px solid #00CC99;
                box-shadow:0 1rem 2rem rgba(0, 0, 0, 0.708);
                margin-top:100px;
            }
            h5{
                font-family:none; 
            }
           .index{
            position: relative;
            z-index: 1;
           }
           .custom-block{
            background:white;
           }
           .icon{
        
           }
           .icon1{
            color:white;
            background:black;
            border:50px;
            border-radius: 50px;
            height:40px;
            width: 40px;
           }
           .icon1:hover{
            background:blue;
           }
           .icon2{
            color:white;
            background:black;
            border:50px;
            border-radius: 50px;
            font-size:1.1rem;

           }
           .icon2:hover{
            background:blue;
            color:white;
           }
           .message{
            height: 180px;
           }
            @media only screen and (max-width: 768px) {
                .card1{
                margin:auto;
                background-color:white;
                width:400px;
                height:900px;
                border:2px solid #00CC99;
                box-shadow:0 1rem 2rem rgba(0, 0, 0, 0.708);
                margin-top:20px;

            }
            .profileimg{
                object-fit:cover;
                border:2px black;
                height:250px;
                width: 300px;
                margin:5px;
                margin-top:10px;
                
            }
           
            }
    </style>
</head>
<body>
    
<div class="m-4">
    <a href="{{ URL::previous() }}" class="icon2 p-3">
        <i class=" bi-arrow-bar-left"></i>
    </a>
</div>
<div class="card1 rounded text-center">
        <div class="">
        <img src="/properyimg/{{$propertys->prophoto}}"  class="rounded float-md-left profileimg" alt="">
        </div>
        <div class="card-body d-grid">
            <h2 class="card-title rounded text-light bg-secondary  my-3"> Property Details</h2>
            <p class="card-text  text-left"><small class="text-left">Property Name: </small></p>
            <p class="card-text  "><h3 class="text-left">{{ $propertys->property}}</h3></p>
            <div class="card-text ">
               <p class="card-text  text-left"> <img src="/profileimg/{{$propertys->image}}" alt="" class="float-md-left rounded-circle profile mt-1 mr-2 mb-1"> </p>
               <div class="more1">
               <p class="card-text text-left"><strong class="">Owner name:</strong></p>
               <p class="card-text text-left">{{ $propertys->name}}</p>
               </div>
            </div>    

            <br>
            <p class="card-text text-left"><strong class="">Price: </strong>{{ $propertys->price}} ₹</p>
            <p class="card-text  text-left"><strong class="">Location: </strong>{{ $propertys->location}}</p>
            <div class="message">
            <p class="card-text  text-left mt-3"><strong class="">About property:</strong></p>
            <p class="card-text  text-left">{{ $propertys->message}}</p>
            </div>
            <div class="">
                <a href="https://wa.me/91{{$propertys->contact}}" class="btn btn-primary float-md-left">
                    Contact
                </a>
                <form action="{{url('cart',$propertys->id)}}" method="POST" enctype="multipart/form-data" class="d-inline float-md-right">
                    @csrf
                                        
                                        
                     <button type="submit" class="icon1 mt-1">
                         <i class="bi-bookmark"></i>
                     </button>
                                        
                </form>
                
            </div>
            
        </div>




       
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>
