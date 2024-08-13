<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title')</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
        
        <link rel="preconnect" href="{{ asset('}https://fonts.gstatic.com')}}" crossorigin>

        <link href="{{ asset('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap') }}" rel="stylesheet">
                        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">

        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        
        

        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

        

        <link href="{{ asset('css/templatemo-pod-talk.css') }}" rel="stylesheet">

        <link href="{{ asset('js/javadash.js') }}" rel="javascript">
        
        
        <link rel="stylesheet" href="{{ asset('css/styledash.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <link href="{{ asset('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css') }}" rel='stylesheet'>
        <style>
            body{
                    background:white;
                    background-image: url("/images/naveimg.png"), linear-gradient(#348CD2, #edf3f7);;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;
                   
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
                margin-right:7px;
            }
            
           
            
            .nav .nav-item .nav-link.active{
                color:#08fff9;
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
            .card2{
                margin:auto;
                margin-top:100px;
                background-color:white;
                width:70%;
                
                border:2px solid #00CC99;
                box-shadow:0 1rem 2rem rgba(0, 0, 0, 0.708);
                left: 0;
                right: 0;
                
            }
            .card3{
                margin:auto;
                margin-top:50px;
                margin-bottom:100px;
                
                box-shadow:0 1rem 2rem rgba(0, 0, 0, 0.708);
                left: 0;
                right: 0;
            
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
           p{
            margin-bottom:0;
           }
           .fixe:hover{
            border:3px solid black;
           }

           .section-padding{
            padding-top:100px;
           }

           .adminlogo{
            margin-left:7px;
           }

           .bx{
            margin-right:5px;
           }

           .vertical-nav{
            background-color:#110e26;
            border-right:1px solid #c9c9c9;
           }

           .nav-link
           {
            color:white;
           }

           .nav .nav-item a:hover{
            color:#08fff9;
           }

           .nav-link{
            border-bottom:2px solid #262842;
           }

           .page-content{
            height: 62px;
            background-color:#110e26;
            border-bottom:1px solid white;    
           }

           .page-content a{
            color: white;
            }

           .page-content a:hover{
                color:#08fff9;
                
            }

            table a{
            color: white;
            }
            table a:hover{
                color:black;
                
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
        <div class="vertical-nav" id="sidebar">
        <div class="mb-3">
        <div class="">
            <a class="me-lg-5 me-0 pt-1" href="{{URL::to('/index')}}">
            <h5 class="pl-2 adminlogo"><img src="{{ asset('profileimg/'.$user->image) }}"  width="50" height="50" class=" rounded-circle  " alt=""> <strong class="text-light">{{$user->name}}</strong></h5>
                </a>
            </div>
            <a id="sidebarCollapse" class="btn btn-light bg-white rounded-pill shadow-sm fixe"><small class="text-uppercase font-weight-bold p-0"><i class='bx bx-menu bx-sm'></i></small></a>         
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0 mt-2">Dashboard Menu</p>

        <ul class="nav flex-column mb-0 aling-items-center">
             <li class="nav-item mt-1 ">
            <a href="/index" ref="home" class="nav-link bx-xs ">
            <i class=' bx bxs-home bx-sm' ></i>      
                        Home
                    </a>
            </li>
            
            <li class="nav-item mt-5 ">
            <a href="/admin" ref="userdash" class="nav-link  bx-xs {{Request::is('admin')  ? 'active' : '' }}">
            <i class='bx bxs-dashboard bx-sm' ></i>      
                        Dashboard
                    </a>
            </li>
            <li class="nav-item mt-5 ">
            <a href="/usermanage" class="nav-link   bx-xs {{Request::is('usermanage')  ? 'active' : '' }}">
            <i class='bx bxs-user-circle bx-sm' ></i>        
                        Manage Users
                    </a>
            </li>
            <li class="nav-item mt-5 ">
            <a href="/promanage" class=" nav-link   bx-xs {{Request::is('promanage')  ? 'active' : '' }}">
            <i class='bx bxl-product-hunt bx-sm' ></i> 
            Manage Propertys 
                    </a>
            </li>
            <li class="nav-item mt-5">
            <a href="/viewdealers" class="nav-link   bx-xs {{Request::is('viewdealers')  ? 'active' : '' }} ">
            <i class='bx bxs-user-check bx-sm' ></i>
                    Dealers
                    </a>
            </li>
            
        </ul>


        </div>
        <!-- End vertical navbar -->


        <!-- Page content holder -->
        <div class="page-content p-2 " >
        <!-- Toggle button -->
        <div class=" dropdown float-right">

                <a class=" drop"  id="ddropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('profileimg/'.$user->image) }}"  width="50" height="50" class="profileimg rounded-circle profile me-3" alt="">

            </a>
            <div class="dropdown-menu" aria-labelledby="ddropdownMenuButton">
                <a class="dropdown-item text-dark" href="/editadmin">Edit Profile</a>
                <a href="{{route('logout')}}" class="dropdown-item text-danger">Logout</a>
            </div>
        </div>
        <a href="/message" class="profile mt-3 "><i class='bx bxs-envelope bx-sm'></i></a>
        
        <a href="" class="profile mt-3 "><i class='bx bxs-bell bx-sm'></i></a>
    </div>
    
        
       
        
       
        
         
    </div>
          
       

        
    @yield('content')



        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('js/custom.js')}}"></script>
        <script src="{{ asset('js/javadash.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{ asset('main.js')}}"></script>
        
    </body>

</html>