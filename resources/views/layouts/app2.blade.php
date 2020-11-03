<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from usdtheme.com/preview-styles/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Aug 2018 15:49:40 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My Beauty Parlour</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon -->        
        <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('public/frontend/img/logo/preloader.ico')}}">

        <!-- google fonts here -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,400italic,500,600,700' rel='stylesheet' type='text/css'>

        <!-- all css here -->

        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
        <!-- nivo-slider css -->
        <link rel="stylesheet" href="{{asset('public/frontend/lib/css/nivo-slider.css')}}" />
        <link rel="stylesheet" href="{{asset('public/frontend/lib/css/preview.css')}}" type="text/css" media="screen" />
        <link rel="stylesheet" href="{{asset('public/frontend/lib/css/style.css')}}" type="text/css" media="screen" />
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/meanmenu.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
        <!-- bootstrap-datetimepicker css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap-datetimepicker.min.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/owl.transitions.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
        <!-- venobox css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/venobox.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
        
        <!-- responsive css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">

        <!-- modernizr css -->
        <script src="{{asset('public/frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div id="preloader"></div>
        <header>
            <!-- header-area start -->
            <div id="sticker" class="header-area hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-12">
                            <div class="logo">
                                <a href="{{ URL::to('/') }}"><img src="{{URL::to('public/frontend/img/logo/logo-icon.png')}}" alt="" /></a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <!-- mainmenu start -->
                        <div class="col-md-10 col-lg-10 col-sm-9 hidden-xs">
                            <div class="header-search hidden-sm">
                                <form action="#">
                                    <span class="search-button"><i class="fa fa-search"></i></span>
                                    <input type="text" placeholder="search..."/>
                                </form>                     
                            </div>
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li><a href="{{URL::to('/')}}">Home</a></li>
                                        <li><a href="{{URL::to('/about')}}">About</a></li>
                                        <li><a href="{{URL::to('/service')}}">services</a>
                                            
                                                
                                                
                                                
                                                                        
                                        </li>
                                        
                                        <li><a href="{{URL::to('/blog')}}">Blog</a>
                                                                           
                                        </li>                                   
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- mainmenu end -->
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img src="{{URL::to('public/frontend/img/logo/logo.png')}}" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    
                                        </li>
                                        <li><a href="#">Our Team</a>
                                        </li>
                                        
                                        <li><a href="#">Our Services</a>
                                            
                                        </li>
                                        <li><a href="#">Portfolio</a>
                                                                         
                                        </li>
                                        <li><a href="#">Events and Gifts</a></li>
                                        <li><a href="#">Blog</a>
                                            
                                        </li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->       
        </header>
        

        @yield('content')
       
        <!-- Start Footer bottom Area -->
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>About Us</h4>
                                    <hr>
                                   <p>Our beauty salon or beauty parlor (beauty parlour), or sometimes beauty shop, is an establishment dealing with cosmetic treatments for men and women.Other variations of this type of business include hair salons and spas.There is a distinction between a beauty salon and a hair salon and although many small businesses do offer both sets of treatments.</p>
                                    <div class="footer-icons">
                                        <?php 
                                  $all_social=DB::table('socialink')
                                                ->get();
                                    foreach ($all_social as $pms_social) {?>

                                        <ul>
                                            <li>
                                                <a href="http://{{$pms_social->facebook}}">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://{{$pms_social->twitter}}">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://{{$pms_social->google_plus}}">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://{{$pms_social->pinteres}}">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>information</h4>
                                    <hr>
                                    <p>
                                        You can contact us our consectetur adipisicing elit.
                                    </p>
                                    <div class="footer-contacts">
                                        <p><span>Call:</span> +8801609921533</p>
                                        <p><span>Email:</span> lovely@gmail.com</p>
                                        <p><span>Working Hours:</span> 10am-5pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Instragram</h4>
                                    <hr>
                                    <div class="flicker-img">
                                        <a href="#">
                                            <img src="{{URL::to('public/frontend/img/portfolio/7.jpg')}}" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="{{URL::to('public/frontend/img/portfolio/8.jpg')}}" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="{{URL::to('public/frontend/img/portfolio/9.jpg')}}" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="{{URL::to('public/frontend/img/portfolio/port1.jpg')}}" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="{{URL::to('public/frontend/img/portfolio/5.jpg')}}" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="{{URL::to('public/frontend/img/portfolio/6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="copyright text-center">
                                <p><?php 
                                  $all_social=DB::table('socialink')
                                                ->get();
                                    foreach ($all_social as $pms_social) {?>

                                   
                                    {{$pms_social->copyright}}
                                    
                                <?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- all js here -->

        <!-- jquery latest version -->
        <script src="{{asset('public/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- Google Map js -->
        

        
        <!-- bootstrap js -->
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
        <!-- venobox js -->
        <script src="{{asset('public/frontend/js/venobox.min.js')}}"></script>
        <!-- bootstrap-datetimepicker js -->
        <script src="{{asset('public/frontend/js/moment.js')}}"></script>
        <script src="{{asset('public/frontend/js/bootstrap-datetimepicker.min.js')}}"></script>
        <!-- meanmenu js -->
        <script src="{{asset('public/frontend/js/jquery.meanmenu.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('public/frontend/js/wow.min.js')}}"></script>
        <!-- Nivo slider js -->         
        <script src="{{asset('public/frontend/lib/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/frontend/lib/home.js')}}" type="text/javascript"></script>
        <!-- isotope js -->
        <script src="{{asset('public/frontend/js/isotope.pkgd.min.js')}}"></script>
        <!-- plugins js -->
        <script src="{{asset('public/frontend/js/plugins.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('public/frontend/js/main.js')}}"></script>
        

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
                
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
  <script>
      @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
               toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
    </script> 
         
    </body>

<!-- Mirrored from usdtheme.com/preview-styles/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Aug 2018 15:50:02 GMT -->
</html>
