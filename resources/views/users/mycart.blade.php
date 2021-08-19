<?php 
 session_start() ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
     my cart|items
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->


    <link href="{{asset('../assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="yellow">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                My
            </a>
            <a href="#" class="simple-text logo-normal">
                menu
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li>
                <a href="/home">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/profile/{{Auth()->user()->id}}">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>{{Auth()->user()->name}} Profile</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('all-Arts')}}">
                        <i class="now-ui-icons education_atom"></i>
                        <p>all Arts</p>
                    </a>
                </li>
                 <li>
                    <a href="/admin/sales">
                        <i class="now-ui-icons education_atom"></i>
                        <p>View buys</p>
                    </a>
                </li>

           
                
                </li>
            
              
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">

                        @if(session('success'))

                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
          
                    <ul class="navbar-nav">
                   
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <i class="now-ui-icons location_world"></i> -->
                                <i class="now-ui-icons users_single-02"></i>
                                welcome {{auth()->user()->name}}
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink"> -->
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>


                                <a class="dropdown-item" href="/home">Home</a>
                               
                            </div>

                            <!-- </div> -->
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               <div class="d-flex align-items-baseline justify-content-between">
                 <h5 class="title">my cart</h5>

                 <?php 
                  
                    $count=0;
                    if(isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);

                    }
                    ;?>
                 <a href="/mycart" class="d-flex">
                         <img src="/images/cart-logo.png" style="height:20px"  >
                        <p class="pl-4">My Cart(<?php echo $count ;?>)</p>
                    </a>
               </div>
                            
             

               <div class="container">
                    <div class="row">
                   <div class="col-lg-12 text-center border rounded bg-light my-5">
                    <h1>My Cart</h1>
               </div>

            <div class="col-md-8">
            
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">user Id</th>
                                <th scope="col">Item name</th>
                                <th scope="col">Item Price</th>
                                <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                        <tbody class="text-center">
                            <?php 
                          
                            $total = 0;
                           
                            if(isset($_SESSION['cart'])){
                               foreach($_SESSION['cart'] as $session){
                                $total = $total+$session['price'];
                                   if($session['user_id'] == auth()->user()->id){
                                    //    echo count($_SESSION['cart']);
                                       ?>
                                     <tr>
                                      <td><?php echo $session['user_id'];?></td>
                                        <td><?php echo $session['name'];?></td>
                                        <td><?php echo $session['price'];?></td>
                                        
                                        <td><input type="number" class = "text-center" value="<?php echo $session['quantity'];?>" min="1" max="10"></td>
                                        <td>
                                            <form action="managecart.php" method="POST">
                                                <input type="hidden" name="item_name" value="<?php echo $session['name']?>">
                                                
                                            <button class="btn btn-sm btn-outline-danger" name="remove_item">remove</button>
                                            </form>
                                        </td>
                                    </tr>


                                    <?php
                                   }else{
                                         
                                   }
                               }
                               

                               
                                
                            }else{
                                echo "cart items = 0 ";
                            }
                            
                            ;?>
                            
                        
                         </tbody>
                        </table>

            </div>

            <div class="col-md-4">
                <div class="border bg-light rounded p-4">
                <h3 class="">Total : <?php echo $total;?></h3>
                <form action="" method="post">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                     m-pesa
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      check on delivery option
                    </label>
                    </div>
                    <button class="btn btn-primary btn-block">make payment</button>
                </form>

                </div>
              
            </div>
        </div>
    </div>
    

               </div>
              

            


               

           
            

             
            
            </div>
          </div>
        </div>
      </div>










        <footer class="footer">
            <div class=" container-fluid ">
                <nav>
                    <ul>
                        <li>
                           <a href="">#</a>
                        </li>
                        <li>
                            <a href="#">
                                #
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                #
                            </a>
                        </li>
                    </ul>
                </nav>
                
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/demo/demo.js')}}"></script>
//ckeditor5
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

@yield('script')
</body>

</html>

