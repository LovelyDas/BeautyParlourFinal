@extends('layouts.app2')
@section('content')
   <header>
            <!-- header-area start -->
            <div id="sticker" class="header-area hidden-xs">
                <div class="container">
                    
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                              
                                
                            				
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>
        <!-- header end -->
        <!--Start Page Content -->
        <div class="service-page">
            <div class="service-heading">
                <div class="blog-overly"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-title text-center">
                                <h2 class="breadcumb-header">Services</h2>
                                <ul class="page-head-menu">
                                    <li><i class="fa fa-home"></i><a class="home" href="#"><span>Home</span></a></li>
                                    <li>Service</li>
                                    <li>Services Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header -->
        <!-- End services Area -->
        <div class="sub-page-head area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-5 col-xs-12">
                        <div class="page-head-left">
                            <div class="single-page-head">
                                <div class="left-menu">
                                    <ul>
                                        <li class="active"><a href="{{URL::to('/latest-hair-style')}}">Latest Hair Styes</a></li>
                                        <li><a href="{{URL::to('/celebraty-style')}}">Popular Styles</a></li>
                                        <li ><a href="{{URL::to('/populer-style')}}">Celebraty Styles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-page-head">
                                <div class="left-contact">
                                    <h4 class="sec-head">Contact Information</h4>
                                    <div class="left-cont-info">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-map-marker"></i>76, Building- Avenue-16, London</a></li>
                                            <li><a href="#"><i class="fa fa-envelope"></i>style@salon.com</a></li>
                                            <li><a href="#"><i class="fa fa-phone"></i> + (1800) - 354 - 586</a></li>
                                        </ul>
                                    </div>
                                    <div class="left-side-icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-page-head">
                                <div class="left-contact">
                                    <h4 class="sec-head">Send Message</h4>
                                    <div class="contact-form text-center">
                                        <form id="contactForm" method="POST" action="http://usdtheme.com/preview-styles/contact.php" class="contact-form">
                                            <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                            <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                            <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                            <button type="submit" id="submit" class="add-btn contact-btn">Submit</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                            <div class="clearfix"></div>  
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End left sidebar -->
                    <!-- Start service page -->
                    <div class="col-md-9 col-sm-7 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-page">
                                    <div class="page-img elec-page">
                                        <img src="{{URL::to('public/frontend/img/service/service1.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- strat single page -->
                            <!-- single-well end-->
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    <a href="#">
                                        <img src="{{URL::to('public/frontend/img/service/service2.jpg')}}" alt="">
                                        <h4 class="sec-head">Popular Hair Styles</h4>
                                    </a>
                                    <p>Redug Larse dolor sit amet, consectetur adipisicing elit. Minima molestias illo magnam debitis voluptates, excepturi dignissimos vel natus sed omnis quisquam eligendi minus obcaecati eos animi nihil facere, expedita repellat. Redug Larse dolor sit amet, consectetur adipisicing elit. Ducimus aspernatur, vitae alias dolorum.</p>
                                    <a class="page-btn" href="#"> Read more</a>
                                </div>
                            </div>
                            <!-- End single page -->
                            <!-- strat single page -->
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    <a href="#">
                                        <img src="{{URL::to('public/frontend/img/service/service5.jpg')}}" alt="">
                                        <h4 class="sec-head">New Hair Styles</h4>
                                    </a>
                                    <p>Redug Larse dolor sit amet, consectetur adipisicing elit. Minima molestias illo magnam debitis voluptates, excepturi dignissimos vel natus sed omnis quisquam eligendi minus obcaecati eos animi nihil facere, expedita repellat. Redug Larse dolor sit amet, consectetur adipisicing elit. Ducimus aspernatur, vitae alias dolorum.</p>
                                    <a class="page-btn" href="#"> Read more</a>
                                </div>
                            </div>
                            <!-- End single page -->
                            <div class="clear"></div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    <h4 class="sec-head">Popular Hair Styles For Man And Woman</h4>
                                    <p>Redug Larse dolor sit amet, consectetur adipisicing elit. Minima molestias illo magnam debitis voluptates, excepturi dignissimos vel natus sed omnis quisquam eligendi minus obcaecati eos animi nihil facere, expedita repellat. Redug Larse dolor sit amet, consectetur adipisicing elit. Ducimus aspernatur, vitae alias dolorum.</p>
                                    <p>Redug Larse dolor sit amet, consectetur adipisicing elit. Minima molestias illo magnam debitis voluptates, excepturi dignissimos vel natus sed omnis quisquam eligendi minus obcaecati eos animi nihil facere, expedita repellat. Redug Larse dolor sit amet, consectetur adipisicing elit. Ducimus aspernatur, vitae alias dolorum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page Area -->

@endsection