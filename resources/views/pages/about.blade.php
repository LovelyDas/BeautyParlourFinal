@extends('layouts.app2')
@section('content')


		<div class="service-page">
			<div class="service-heading">
				<div class="blog-overly"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="blog-title text-center">
								 <h2 class="breadcumb-header">About Styles</h2>
								 <ul class="page-head-menu">
									<li><i class="fa fa-home"></i><a class="home" href="#"><span>Home</span></a></li>
									<li>About us</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Page Header -->
		<!-- Start Service Area -->
		<div class="page-service-area area-padding ">
			<div class="container">
			   <div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="section-headline text-center">
							<h3>About Styles</h3>
							<p>Salon Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.</p>
						</div>
						<div class="our-service-inner">
							<div class="col-lg-6 col-md-6">
								<div class="service-pic">
                                    <div class="full-width-video-wrap embed-responsive embed-responsive-16by9">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/K21IEdSYlv0" frameborder="0" allowfullscreen></iframe>
                                    </div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="srvice-info">
									<p>Codespot ltd. is an outsourcing, software, mobile applications and website design based in Ho Chi Minh city, Vietnam. We open job positions for talent and enthusiasm persons who could bring the best technologies and the most values to clients and community. At Codespot, not only you are working, you’re creative!</p>

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu tellus ipsum. Nunc maximus sapien ac dui vulputate tincidunt. Morbi luctus nisi vel suscipit volutpat. Donec vitae auctor nisl. Ut malesuada felis in erat rutrum ultrices. Fusce iaculis ornare nunc rutrum ornare. Proin ut placerat enim, vel venenatis urna. Phasellus sed diam tincidunt mauris malesuada mattis et in nisl. Quisque massa eros, molestie at mi eget, aliquam tristique eros. </p>
								</div>
							</div>
						</div>
					</div>    
				</div>
			</div>
		</div>
		<!-- Start Service Area -->
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
                                            <img src="img/testimonial/test1.jpg" alt="">
                                        </div>
                                        <div class="testi-text text-center">
                                            <p>Salon Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.</p>
                                            <h6>marlin</h6>
                                            <span class="guest-rev">Color Specialest - <a href="#">Styles Salon</a></span>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi text-center">
                                        <div class="testi-img">
                                            <img src="img/testimonial/test2.jpg" alt="">
                                        </div>
                                        <div class="testi-text text-center">
                                            <p>Salon Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.</p>
                                            <h6>Annie</h6>
                                            <span class="guest-rev">Face Specialest - <a href="#">Styles Salon</a></span>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi text-center">
                                        <div class="testi-img">
                                            <img src="img/testimonial/test3.jpg" alt="">
                                        </div>
                                        <div class="testi-text text-center">
                                            <p>Salon Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.</p>
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
        <!-- Start team Area -->
        <div class="our-team-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Our special Team</h3>
                            <p>Salon Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br/>  Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="team-member-full">
                            <div class="row">
								<?php 
                              	$all_special_team=DB::table('tbl_add_team_member')
                                                ->where('publication_status',1)
                                                ->get();
                                    foreach ($all_special_team as $pms_special_team) {?>
                                <div class="col-lg-3 col-md-3 col-sm-4">
                                    <!-- Start single-team member -->

                                    <div class="single-team-member">
                                        <div class="team-img">
                                            <a href="#">
                                                <img src="{{$pms_special_team->team_member_image}}" alt="">
                                            </a>
                                            <div class="team-social-icon text-center">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-content head-team">
                                            <h4>{{$pms_special_team->team_member_name}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <!-- End single-team member -->
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End our team Area -->



@endsection