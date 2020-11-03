<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Aug 2018 11:46:46 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Beauty parlour</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('public/assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{asset('public/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!--Data Tables -->
  <link href="{{asset('public/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('public/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  <!-- animate CSS-->
  <link href="{{asset('public/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('public/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('public/assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('public/assets/css/app-style.css')}}" rel="stylesheet"/>
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>

<body>
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
      <a href="{{ route('dashboard') }}">
       <img src="{{URL::to('public/assets/images/logo-icon.png')}}" class="logo-icon" alt="Bangodash">
       <h5 class="logo-text"> Parlour</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="{{URL::to('/dashboard')}}" class="waves-effect">
          <i class="icon-home"></i> <span>Dashboard</span></i>
        </a>  
      </li>

    <!--Style Salon Allappointment -->
      <li>
        <a href="#" class="waves-effect">
          <i class="fa fa-user" aria-hidden="true"></i><span>Appointment</span> <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="sidebar-submenu">
         
         <li><a href="{{URL::to('/add-appoinment')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>Add Appointment</a></li>

          <li><a href="{{URL::to('/all-appoinment')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>All Appointment</a></li>

        </ul> 

      </li>

      <li>
        <a href="#" class="waves-effect">
          <i class="fa fa-picture-o" aria-hidden="true"></i><span>Parlour Image</span> <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/add-big-img')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Big Image</a></li>
          <li><a href="{{URL::to('/all-big-img')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>All Big Image</a></li>

          <li><a href="{{URL::to('/add-small-img')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Small Image</a></li>
          <li><a href="{{URL::to('/all-small-img')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>All Small Image</a></li>

        </ul> 

      </li>



      <li>
        <a href="#" class="waves-effect">
          <i class="fa fa-picture-o" aria-hidden="true"></i><span>Services Image</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/add-cut-img')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Cut Image</a></li>
          <li><a href="{{URL::to('/all-cut-img')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>All Cut Image</a></li>

            <li><a href="{{URL::to('/add-special-img')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Special Image</a></li>
          <li><a href="{{URL::to('/all-special-img')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>All Special Image</a></li>

            <li><a href="{{URL::to('/add-other-img')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Other Service Image</a></li>
          <li><a href="all-other-img"><i class="fa fa-list-alt" aria-hidden="true"></i>All Other Service Image</a></li>
        </ul>
      </li>


      <li>
        <a href="#" class="waves-effect">
          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Add Service Price</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/add-cuting-price')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Cuting Price</a></li>

          <li><a href="{{URL::to('/all-cuting-price')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>All Cuting Price</a></li>

          <li><a href="{{URL::to('/add-special-price')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Special Price</a></li>
          <li><a href="{{URL::to('/all-special-price')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>All Special Price</a></li>

          <li><a href="{{URL::to('/add-other-price')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Other Price</a></li>

          <li><a href="{{URL::to('/all-other-price')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>All Other Price</a></li>
          
        </ul>
      </li>

      <!-- our special team -->
      <li>
        <a href="#" class="waves-effect">
          <i class="fa fa-male" aria-hidden="true"></i> <span>Our Special Team</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/add-special-team')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Special Team</a></li>

          <li><a href="{{URL::to('/all-special-team')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>All Special Team</a></li>

         </ul>
      </li>
      

       <!-- Slide  -->
      <li>
        <a href="#" class="waves-effect">
          <i class="fa fa-sliders" aria-hidden="true"></i></i> <span>Slider</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/add-slider-img')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add slider</a></li>

          <li><a href="{{URL::to('/all-slider-img')}}"><i class="fa fa-sliders" aria-hidden="true"></i>All slider</a></li>

         </ul>
      </li>
          <!-- Gallery  -->
          

          <!-- blog  -->
          <li>
            <a href="#" class="waves-effect">
              <i class="fa fa-th" aria-hidden="true"></i> <span>Blog</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="{{URL::to('/add-blog')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add New Blog</a></li>

              <li><a href="{{URL::to('/all-blog')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>All Blog</a></li>

              
    
             </ul>
          </li>
           <!-- all-contacts  -->
          <li>
            <a href="#" class="waves-effect">
              <i class="fa fa-th" aria-hidden="true"></i> <span>Contacts</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="{{URL::to('/all-contacts')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>All Contacts</a></li>
            </ul>
          </li> 

        <!-- settings -->
           


           <li>
            
          </li>



 </ul>
</div>
   <!--End sidebar-wrapper-->



<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-ibiza">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
       </a>
      <div class="dropdown-menu dropdown-menu-right animated fadeIn">
        <ul class="list-group list-group-flush">
        
          
          </li>
          
          <a href="javaScript:void();">
           <div class="media">
             
            <div class="media-body">
            
            </div>
          </div>
          </a>
          </li>
          
          <a href="javaScript:void();">
           <div class="media">
             
            <div class="media-body">
            
            </div>
          </div>
          </a>
          </li>
         
          <a href="javaScript:void();">
           <div class="media">
            
            <div class="media-body">
           
            </div>
          </div>
          </a>
          </li>
         
          <a href="javaScript:void();">
           <div class="media">
            
            <div class="media-body">
            
            </div>
          </div>
          </a>
          </li>
          
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
       </a>
      <div class="dropdown-menu dropdown-menu-right animated fadeIn">
        <ul class="list-group list-group-flush">
         
          
          <span class="badge badge-primary"></span>
          </li>
         
          <a href="javaScript:void();">
           <div class="media">
             
            <div class="media-body">
            
            </div>
          </div>
          </a>
          </li>
          
          <a href="javaScript:void();">
           <div class="media">
            
            <div class="media-body">
            
            </div>
          </div>
          </a>
          </li>
          
          <a href="javaScript:void();">
           <div class="media">
             
            <div class="media-body">
            
            </div>
          </div>
          </a>
          </li>
          
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="#"><i class="flag-icon flag-icon-gb"></i></a>
      <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
         
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="{{URL::to('public/assets/images/avatars/GoneshUma.JPG')}}" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{URL::to('public/assets/images/avatars/GoneshUma.JPG')}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">{{ Auth::user()->name }}</h6>
            <p class="user-subtitle">lovelydas177@gmail.com</p>
            </div>
           </div>
          </a>
        </li>
        
    <li class="dropdown-item">
      <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="icon-power mr-2"></i>{{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    </li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>



<!-- ==================Start===================== -->
  
  <div class="content-wrapper">
    <div class="container-fluid">
  
      
              

                 @yield('layouts_content')

           


    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->

    <!-- ========================end============================ -->

   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--Start footer-->
  <footer class="footer">
      <div class="container">
        <div class="text-center">
         My Beauty Parlour!
        </div>
      </div>
    </footer>
  <!--End footer-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
  <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
  
  <!-- simplebar js -->
  <script src="{{asset('public/assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{asset('public/assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('public/assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('public/assets/js/app-script.js')}}"></script>

  <!--Data Tables js-->
  <script src="{{asset('public/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('public/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('public/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('public/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('public/assets/plugins/bootstrap-datatable/js/jszip.min.js')}}"></script>
  <script src="{{asset('public/assets/plugins/bootstrap-datatable/js/pdfmake.min.js')}}"></script>
  <script src="{{asset('public/assets/plugins/bootstrap-datatable/js/vfs_fonts.js')}}"></script>
  <script src="{{asset('public/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('public/assets/plugins/bootstrap-datatable/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('public/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js')}}"></script>
 <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
      table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
    <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>
    <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script> 
    <script>
      $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Are you sure you want to delete this!!",function(confirmed){
          if (confirmed) {
            window.location.href = link;
          };
        });
      }); 
    </script>

   <script>  
         $(document).on("click", "#cancel", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to Cancel?",
                  text: "Once Cancel, This will be Permanently Cancel!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
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

<!-- Mirrored from kvthemes.com/bangodash/color-version/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Aug 2018 11:49:36 GMT -->
</html>
