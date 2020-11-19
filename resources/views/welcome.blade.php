@extends('layouts.app2')
@section('content')
        <!-- Start Slider Area -->
        <div class="slider-area">
            
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                <?php 
                    $all_slider_img=DB::table('tbl_add_slider')
                                    ->where('publication_status',1)
                                    ->get();
                                 
                      foreach ($all_slider_img as $pms_slider_img){

                        ?>

                        <img src="{{($pms_slider_img->slider_image)}}" alt="" title="#slider-direction-1"  />
                  
                    <?php } ?>   
                </div>

            
                <!-- direction 1 -->
                <div id="slider-direction-1" class="slider-direction slider-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <div class="slider-content hidden-xs">
                                    <!-- layer 1 -->
                                    <div class="layer-1-1 wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s ">
                                        <h2 class="title1">Beauty Parlour Management</h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".4s ">
                                        <h1 class="title2">Lovely's Stylish Flow</h1>
                                    </div>
                                    <!-- layer 3 appointment -->
                                    
                                    <div class="layer-1-3 wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s ">
                                        <a href="#" class="ready-btn" title="Quick view" data-toggle="modal" data-target="#productModal">Apply for Appoinment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- End Slider Area -->


        <!-- Start banner Area -->
        <div class="banner-area area-padding fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                        <h3>Parlour Image</h3>
                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="banner-item">
                            <?php

                             $all_style_salon_img=DB::table('tbl_style_salon_bigimg')
                                                        ->where('publication_status',1)
                                                        ->get();

                                foreach ($all_style_salon_img as $pms_tyle_salon_img) {?>
                            <div class="single-banner wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <a href="#">
                                    <img src="{{$pms_tyle_salon_img->salon_big_image}}" alt="banners">
                                </a>
                            </div>
                          <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="banner-item">
                            <?php

                             $all_style_salon_smallimg=DB::table('tbl_style_salon_smallimg')
                                                        ->where('publication_status',1)
                                                        ->get();

                                foreach ($all_style_salon_smallimg as $pms_style_salon_smallimg) {?>
                            <div class="single-banner banner-mar wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <a href="#">
                                    <img src="{{$pms_style_salon_smallimg->style_salon_small_img}}" alt="banners">
                                </a>
                            </div>
                           <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End banner Area -->


        
        <!-- Start team Area -->
        <div class="our-team-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                        <h3>Our special Team</h3>
                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="team-member">
                            <div class="team-side-text">
                                <div class="team-left-text">
                                    <h4>meet our expert team</h4>
                                    <p>Every member of the Perfection team is carefully selected to ensure they complement and enhance the environment that has been so carefully crafted for our valued clients.We are committed to offering the latest treatments, services and techniques utilising only the highest quality products available on the market. We are confident that our treatment menu rivals that of the most hair and skin.</p>
                                  </div>
                               
                                  <div class="team-left-icon text-center">
                                    <ul>
                                        <li><a href="https://web.facebook.com/lovely.das.73345/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/LovelyG50733362"><i class="fa fa-twitter"></i></a></li>
                                        
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
<!-- ================================================ -->
                    <div class="col-lg-9 col-md-9 col-sm-8 team-left wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="team-member-carousel team-indicator">
                           
                           <!-- Start single-team member -->
                            <?php 
                              $all_special_team=DB::table('tbl_add_team_member')
                                                ->where('publication_status',1)
                                                ->get();
                                    foreach ($all_special_team as $pms_special_team) {?>
                            <div class="single-team-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{($pms_special_team->team_member_image)}}" alt="">
                                    </a>
                                    
                                </div>
                                <div class="team-content head-team">
                                    <h4>{{($pms_special_team->team_member_name)}}</h4>
                                    <p>{{($pms_special_team->team_member_information)}}</p>
                                </div>
                            </div>

                        <?php } ?>
                            <!-- End single-team member -->


                            
                            
                        </div>
                    </div>
<!-- ================================== -->

                </div>
            </div>
        </div>
        <!-- End our team Area -->


        <!-- Start Service Area -->
        <div class="service-area area-padding">
            <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                        <h3>Our Services</h3>
                       
                        </div>
                    </div>
                </div>
                <div class="row mar-table mob-res">
                    <div class="col-lg-12 wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="service-right">
                            <div class="cut-content head-team">
                                <h4>Cutting</h4>
                            </div>
                           
                   <!-- This is Cuting Image  -->
                      <?php 
                                $all_cuting_img=DB::table('tbl_add_cuting_img')
                                                        ->where('publication_status',1)
                                                        ->get();

                                foreach ($all_cuting_img as $pms_cuting) {?>
                            <div class="service-images">
                                <a href="#"><img src= "{{$pms_cuting->cut_img_service}}" alt=""></a>
                                <div class="overly-text">
                                    <h4>follow our services</h4>
                                    <a class="btn-service " href="#">Read more</a>
                                </div>
                            </div>
                         <?php } ?>
                     
                        </div> 
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class=" table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Cut</th>
                                            <th>Womens</th>
                                            <th>Mens</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                $all_cuting_price=DB::table('tbl_add_cuting_price')
                                                        ->where('publication_status',1)
                                                        ->get();

                                foreach ($all_cuting_price as $pms_cuting_price) {

                                    $rating     =   DB::table('feedback')
                                                        ->where('service_name', $pms_cuting_price->cuting_price_name)
                                                        ->avg('rating');
                                    $rating     =   round($rating);

                                    ?>
                                        <tr>
                                            <td>{{$pms_cuting_price->cuting_price_name}}</td>
                                            <td>{{$pms_cuting_price->cuting_price_women}}tk</td>
                                            <td>{{$pms_cuting_price->cuting_price_mens}}tk</td>
                                            <td data-service-name="{{$pms_cuting_price->cuting_price_name}}">

                                                @if($rating == 0)
                                                    No rating available
                                                @else
                                                <a href="javascript:void(0);" class="btn-rating" title="Click to view commnets.">
                                                    <span class="star-rating-show">
                                                      @for($i = 1; $i<= 5 ; $i++)
                                                          @if($i <= $rating )
                                                                <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="Red dot" />

                                                            @else
                                                                <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="Red dot" />

                                                            @endif
                                                       @endfor
                                                    </span>
                                                </a>
                                                @endif
                                            </td>
                                        </tr>
                                       <?php } ?>  
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- end table -->
                    </div>
                </div>
                <!-- end row -->
                <div class="row mar-table hidden-xs">
                    <div class="col-lg-12 wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s"> <form action="#">
                            <div class="table-content left-content table-responsive">
                                <table class=" table table-striped">
                                    <thead>
                                        <tr>
                                            <th>facial</th>
                                            <th>Womens</th>
                                            <th>Mens</th>
                                            <th>Rating</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                $all_special_price=DB::table('tbl_add_special_price')
                                                        ->where('publication_status',1)
                                                        ->get();

                                foreach ($all_special_price as $pms_special_price) {

                                    $rating     =   DB::table('feedback')
                                        ->where('service_name', $pms_special_price->special_price_name)
                                        ->avg('rating');
                                    $rating     =   round($rating);

                                    ?>
                                        <tr>
                                            <td>{{$pms_special_price->special_price_name}}</td>
                                            <td>{{$pms_special_price->special_price_women}}tk</td>
                                            <td>{{$pms_special_price->special_price_mens}}tk</td>
                                            <td data-service-name="{{$pms_special_price->special_price_name}}">

                                                @if($rating == 0)
                                                    No rating available
                                                @else
                                                    <a href="javascript:void(0);" class="btn-rating" title="Click to view commnets.">
                                                    <span class="star-rating-show">
                                                      @for($i = 1; $i<= 5 ; $i++)
                                                            @if($i <= $rating )
                                                                <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="Red dot" />

                                                            @else
                                                                <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="Red dot" />

                                                            @endif
                                                        @endfor
                                                    </span>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                       <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- end table -->
                        <div class="service-right">
                           <div class="cut-content head-team">
                                <h4>Special facial</h4>
                            </div>
                            <?php 
                                $special_img=DB::table('tbl_add_special_img')
                                                        ->where('publication_status',1)
                                                        ->get();

                                foreach ($special_img as $v_category) {?>
                            <div class="service-images">
                                <a href="#"><img src="{{$v_category->special_img}}" alt=""></a>
                                <div class="overly-text">
                                    <h4>follow our services</h4>
                                    <a class="btn-service " href="#">Read more</a>
                                </div>
                            </div>
                           <?php } ?>
                        </div>
                     
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12 wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="service-right">
                            <div class="cut-content head-team">
                                <h4>Other Services</h4>
                            </div>

                            <?php 
                                $all_other_img=DB::table('tbl_add_other_img')
                                                        ->where('publication_status',1)
                                                        ->get();

                                foreach ($all_other_img as $pms_otherservice) {?>
                            <div class="service-images">
                                <a href="#"><img src="{{$pms_otherservice->other_image}}" alt=""></a>
                                <div class="overly-text">
                                    <h4>follow our services</h4>
                                    <a class="btn-service " href="#">Read more</a>
                                </div>
                            </div>
                             <?php } ?>
                        </div> 
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class=" table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Services</th>
                                            <th>Womens</th>
                                            <th>Mens</th>
                                            <th>Rating</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                $all_other_price=DB::table('tbl_add_other_price')
                                                        ->where('publication_status',1)
                                                        ->get();

                                foreach ($all_other_price as $pms_other_price) {
                                        $rating     =   DB::table('feedback')
                                            ->where('service_name', $pms_other_price->other_price_name)
                                            ->avg('rating');
                                        $rating     =   round($rating);
                                        ?>
                                        <tr>
                                            <td>{{$pms_other_price->other_price_name}}</td>
                                            <td>{{$pms_other_price->other_price_women}}tk</td>
                                            <td>{{$pms_other_price->other_price_mens}}tk</td>
                                            <td data-service-name="{{$pms_other_price->other_price_name}}">

                                                @if($rating == 0)
                                                    No rating available
                                                @else
                                                    <a href="javascript:void(0);" class="btn-rating" title="Click to view commnets.">
                                                    <span class="star-rating-show">
                                                      @for($i = 1; $i<= 5 ; $i++)
                                                            @if($i <= $rating )
                                                                <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="Red dot" />

                                                            @else
                                                                <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="Red dot" />

                                                            @endif
                                                        @endfor
                                                    </span>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                     <?php } ?>   
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- end table -->
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- End Service Area -->
        
       <!-- Start portfolio Area -->
       
        <!-- awesome-portfolio end -->
        <!-- Start testimonials end -->
        <div class="testimonial-area">
            <div class="well-bg">
                <div class="test-overly"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                            <div class="testimonial-content">
                                <!-- start testimonial carousel -->
                                <div class="testimonial-carousel">
                                    <div class="single-testi text-center">
                                        <div class="testi-img">
                                            <img src="{{URL::to('public/frontend/img/testimonial/test1.jpg')}}" alt="">
                                        </div>
                                        <div class="testi-text text-center">
                                            
                                            <h6>jenny</h6>
                                            <span class="guest-rev">Color Specialest - <a href="#">Styles Salon</a></span>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi text-center">
                                        <div class="testi-img">
                                            <img src="{{URL::to('public/frontend/img/testimonial/test2.jpg')}}" alt="">
                                        </div>
                                        <div class="testi-text text-center">
                                            
                                            <h6>Annie</h6>
                                            <span class="guest-rev">Face Specialest - <a href="#">Styles Salon</a></span>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi text-center">
                                        <div class="testi-img">
                                            <img src="{{URL::to('public/frontend/img/testimonial/test3.jpg')}}" alt="">
                                        </div>
                                        <div class="testi-text text-center">
                                           
                                            <h6>Janifer</h6>
                                            <span class="guest-rev">Hair Specialest -<a href="#">Styles Salon</a></span>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End testimonials end -->
        <!-- Start Blog Area -->
         <div class="our-blog-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                        <h3>Our Latest News</h3>
                       
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-post-inner blog-carousel team-indicator">
                        <!-- Start Single Blog -->
                        <?php 
                                       $all_blog=DB::table('tbl_add_blog')               
                                            ->where('publication_status',1)
                                                          ->get();
                                                           
                                        foreach ($all_blog as $pms_blog) {
                                            
                                    ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog text-left ">
                                <div class="blog-thumb">
                                    <img alt="blog img" src="{{$pms_blog->blog_img}}">
                                </div>
                                <div class="blog-info">
                                    <h3 class="blog-heading"><a href="#">{{$pms_blog->blog_title_name}}</a></h3>
                                    <div class="blog-post-dlc">
                                        <ul>
                                            <li>
                                                <span class="date-time"><i class="fa fa-calendar"></i>feb 18, 2020</span>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a>17</li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i></a>2</li>
                                        </ul>
                                    </div>
                                    <p class="blog-content">
                                            
                                        
                                        {{ str_limit(strip_tags($pms_blog->blog_description),230) }}
                                        <a href="" class="btn btn-info btn-sm">Read More</a
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                        <!-- End Single Blog -->

                      
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <!--End Blog Post Area -->
        <!-- Start contact Area -->
        <div class="contact-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Contact us</h3>
                            
                        </div>
                    </div>
                </div>
                <div class="row contact-page">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon">
                            <div class="single-icon">
                                <i class="fa fa-mobile"></i>
                                <p>
                                    Call : +880175047834<br>
                                    <span>Everyday(10am-10pm)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon">
                            <div class="single-icon">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    Email : lovelydas177@gmail.com<br>
                                    <span>Web: www.stylesal_on.com</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon">
                            <div class="single-icon">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    Location : <br>
                                    <span>12 house/5 Road</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Start Map -->
                        <div class="map-area">
                            <div id="googleMap" style="width:100%;height:330px;"></div>
                        </div>
                        <!-- End Map -->
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">

                                <form id="contactForm" method="POST" action="{{url('/save-contact')}}" class="contact-form">
                                    @csrf
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name" name="contact_name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email" name="contact_email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject" name="contact_subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message" name="contact_massage"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" id="submit" class="add-btn contact-btn">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                </form> 

                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- End Contact Area -->



        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="o-form text-center">Appiontment Form</h3>
                    </div>
                    <div class="modal-body">
                        <div class="sign-form order-form">
                            <h4 class="form-head text-center">Your Information</h4>
                        <form id="contactsForm" method="POST" action="{{url('/save-appoinment')}}" class="contact-form">
                                @csrf
                                <!-- single feilds -->
                                <div class="sign-feilds">
                                    <div class="input-text">
                                        <input type="text" id="fname" class="form-control width-50" placeholder="First Name" name="first_name" required data-error="Please enter your name">
                                        <input type="text" id="lname" class="form-control width-50 last-name" placeholder="Last Name" name="last_name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- single feilds -->
                                <div class="sign-feilds">
                                    <div class="input-text">
                                        <input type="email" class="email form-control width-50" id="eemail" placeholder="Email"name="email" required data-error="Please enter your email">
                                        <input type="text" class="address form-control width-50 last-name" id="phone" placeholder="Phone Number" name="phone_number" required data-error="Please enter your address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- single feilds -->
                                <div class="sign-feilds">
                                    <div class="input-text">
                                        <input type="text" class="address form-control" id="address" placeholder="Address" name="address" required data-error="Please enter your address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- single feilds -->
                                <div class="sign-feilds">
                                    <div class="input-text">
                                        <select id="sel" class="select-country form-control width-50" name="service_name">
                                            <option value="0">Select Services</option>
                                            <?php 
                                                $all_team_member=DB::table('tbl_add_cuting_price')
                                                                    ->where('publication_status',1)
                                                                    ->get();
                                                    foreach ($all_team_member as $pms_team_member)
                                              {?>
                                            <option value="{{$pms_team_member->cuting_price_name}}">{{$pms_team_member->cuting_price_name}}</option>
                                             <?php } ?>
                                          

                                            <?php 
                                                $all_team_member=DB::table('tbl_add_special_price')
                                                                    ->where('publication_status',1)
                                                                    ->get();
                                                    foreach ($all_team_member as $pms_team_member)
                                              {?>
                                            <option value="{{$pms_team_member->special_price_name}}">{{$pms_team_member->special_price_name}}</option>
                                        <?php } ?>
                                       
                                            
                                        </select>
                                        <select id="sele" class="select-country form-control width-50 last-name" name="team_member_name">
                                            <option value="0">Select Member</option>
                                             <?php 
                                                $all_team_member=DB::table('tbl_add_team_member')
                                                                    ->where('publication_status',1)
                                                                    ->get();
                                                    foreach ($all_team_member as $pms_team_member)
                                              {?>
                                            <option value="{{$pms_team_member->team_member_name}}">{{$pms_team_member->team_member_name}}</option>
                                            
                                             <?php } ?>
                                            
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- single feilds -->
                                <div class="sign-feilds">
                                    <div class="form-group form-control width-50">
                                        <div class="input-group date">
                                            <input type='date' name="datepick" class="form-control" id="txtDate" />
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group form-control width-50 last-name">
                                        <div class="input-group date" id="datetimepicker3">
                                            <input type='text' name="timepick" class="form-control" />
                                            <span class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single feilds -->
                                <div class="sign-feilds">
                                    <div class="submit-btn">
                                        <button type="submit" id="submit_mg" class="add-btn contact-btn">Book Now</button>
                                        <div id="msg_Submit" class="h3 text-center hidden"></div>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                    <!-- modal-body -->
                </div>
                <!-- modal-content -->
            </div>
        </div>

        <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="text-center">Feedbacks of service <span id="servce-name-id"></span></h3>
                    </div>
                    <div class="modal-body">
                        <div class="feedback-data">

                        </div>
                    </div>
                    <!-- modal-body -->
                </div>
                <!-- modal-content -->
            </div>
        </div>
        <!-- END Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        
        var minDate= year + '-' + month + '-' + day;
        
        $('#txtDate').attr('min', minDate);
    });


    $(document).on('click', '.btn-rating', function(e) {
        e.preventDefault();
        var that             =   $(this);
        var serviceName      =   that.closest('td').data('service-name');
        $("#servce-name-id").text(serviceName);

        $.ajax({
            beforeSend: function(){

            },
            success: function(data){
                var html    =   "";
                $("#feedbackModal").modal('show');
                $(".feedback-data").html('');

                $.each( data.feedBacks , function( key, value ) {

                    html  += "<div class=\"row\">\n" +
                        "           <div class=\"col-lg-4\">\n<b>" +
                                        value.usr_first_name + " : </b> " +
                        "           </div>\n" +
                        "           <div class=\"col-lg-8-\">\n" +
                                        value.cmnt +
                        "           </div>\n" +
                        "        </div> <hr>";
                });

                $(".feedback-data").html(html);

            },
            type: 'POST',
            url:'{{ url("get_all_feedback") }}',
            data: {
                "_token": "{{ csrf_token() }}",
                "serviceName" : serviceName
            },
            cache: false,
            dataType: 'json'
        });
    });
</script>


@endsection