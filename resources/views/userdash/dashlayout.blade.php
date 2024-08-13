<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title')</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">
                        
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/bootstrap-icons.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">
        
        

        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        

        <link href="css/templatemo-pod-talk.css" rel="stylesheet">

        <link href="js/javadash.js" rel="javascript">
        
        
        <link rel="stylesheet" href="css/styledash.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                float:right;
                
            }
            .profileimg{
                object-fit:cover;
                
            }
            
            .nav .nav-item .nav-link.active{
                color:blue;
            }
            .card1{
                margin:auto;
                margin-top:100px;
                background-color:white;
                width:800px;
                height:500px;
                border:2px solid #00CC99;
                box-shadow:0 1rem 2rem rgba(0, 0, 0, 0.708);
                left: 0;
                right: 0;
                position: fixed;
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
           .fixe{
            margin-left:250px;
            width:100px;
            border:3px solid black;
           }
           .fixe:hover{
            border:3px solid black;
        
           }
           .section-padding{
            padding-top:200px;
           }
        
            @media only screen and (max-width: 768px) {
                .card1{
                margin:auto;
                margin-top:50px;
                background-color:white;
                width:400px;
                height:500px;
                border:2px solid #00CC99;
                box-shadow:0 1rem 2rem rgba(0, 0, 0, 0.708);
            }
            .profile{
                float:right;
                
            }
            }
           
 
 </style>
    </head>
<body>
    

        <!-- Vertical navbar -->
        <div class="vertical-nav bg-white " id="sidebar">
        <div class="mb-3">
            <div class="">
            <a class="me-lg-5 me-0 mt-3" href="{{URL::to('/index')}}">
                    <img src="images/pod-talk-logo.png" class="logo-image img-fluid" alt="Echoestate">
                </a>
               

            </div>
            <a id="sidebarCollapse" class="btn btn-light bg-white rounded-pill shadow-sm fixe"><small class="text-uppercase font-weight-bold p-0"><i class='bx bx-menu bx-sm'></i></small></a>         
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0 mt-2">Dashboard Menu</p>

        <ul class="nav flex-column bg-white mb-0 aling-items-center">
        <li class="nav-item mt-1 ">
            <a href="index" ref="home" class="nav-link bx bxs-home bx-sm ">
                        
                        Home
                    </a>
            </li>
            <li class="nav-item mt-5 ">
            <a href="/dashboard" ref="userdash" class="nav-link bx bxs-dashboard bx-sm {{Request::is('dashboard')  ? 'active' : '' }}">
                        
                        Dashboard
                    </a>
            </li>
            <li class="nav-item mt-5 ">
            <a href="/listeddash" class="nav-link bx bx-cart-add bx-sm {{Request::is('listeddash')  ? 'active' : '' }}">
                         
                        Listed
                    </a>
            </li>
            <li class="nav-item mt-5">
            <a href="/rentdash" class="nav-link bx bx-current-location bx-sm {{Request::is('rentdash')  ? 'active' : '' }}">
                        
                        Rents
                    </a>
            </li>
            <li class="nav-item mt-5">
            <a href="/cartdash" class="nav-link bx bx-save bx-sm {{Request::is('cartdash')  ? 'active' : '' }} ">
                        Carts
                    </a>
            </li>
            <li class="nav-item mt-5">                                     
                <a href="{{route('logout')}}" class="nav-link bx bx-log-out bx-sm text-danger">Logout</a>
            </li>
        </ul>


        </div>
        <!-- End vertical navbar -->


        <!-- Page content holder -->
        <div class="page-content p-2 "  id="content">
        <!-- Toggle button -->
        
        
        <img src="profileimg/{{$user->image}}"  width="50" height="50" class="profileimg rounded-circle profile me-3 " alt="">
        
        <h5 class=" profile mt-3 me-2">Welcome <strong>{{$user->name}}</strong></h5>
        </div>
    </div>
          
       

        
    @yield('content')



        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/javadash.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="main.js"></script>
        
    </body>

</html>