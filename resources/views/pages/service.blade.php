@extends('layouts.app2')
@section('content')


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
		<!-- Start Service Area -->
		<div class="page-service-area area-padding ">
			<div class="container">
			   <div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="section-headline text-center">
							<h3>About Services</h3>
							<p>Salon Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br/>  Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, .</p>
						</div>
						<div class="our-service-inner">
							<div class="col-lg-6 col-md-6">
								<div class="service-pic">
									<img src="{{URL::to('public/frontend/img/service/service1.png')}}" alt="our image">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="srvice-info">
									<p>Codespot ltd. is an outsourcing, software, mobile applications and website design based in Ho Chi Minh city, Vietnam. We open job positions for talent and enthusiasm persons who could bring the best technologies and the most values to clients and community. At Codespot, not only you are working, you’re creative!</p>

									<p>Codespot ltd. was founded by a group of passionate and experience programmers in technologies. Over three years, Codespot Company has built a good image with our partners and clients “Separate your website from the crowd “is our mission. We join to turn your ideas into reality. Outstanding Website, your business will stand out. You succeed, we succeed.”</p>

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu tellus ipsum. Nunc maximus sapien ac dui vulputate tincidunt. Morbi luctus nisi vel suscipit volutpat. Donec vitae auctor nisl. Ut malesuada felis in erat rutrum ultrices. Fusce iaculis ornare nunc rutrum ornare. Proin ut placerat enim, vel venenatis urna. Phasellus sed diam tincidunt mauris malesuada mattis et in nisl. Quisque massa eros, molestie at mi eget, aliquam tristique eros. </p>
								</div>
							</div>
						</div>
					</div>    
				</div>
			</div>
		</div>
        <!-- service area start -->
        <div class="service-single area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Our Services</h3>
                            <p>Salon Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br/>  Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, .</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single-well start-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="{{URL::to('public/frontend/img/service/service1.jpg')}}" alt="">
                                    <h4 class="sec-head">Hair Cutting</h4>
                                </a>
                                <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at neque.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="well-middle">
                            <div class="single-well">
                                <a href="#">
                                    <img src="{{URL::to('public/frontend/img/service/service2.jpg')}}" alt="">
                                    <h4 class="sec-head">Split End Repair </h4>
                                </a>
                                <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at neque.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-lg-4 col-md-4 hidden-sm col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="{{URL::to('public/frontend/img/service/service3.jpg')}}" alt="">
                                    <h4 class="sec-head">Clean Up</h4>
                                </a>
                                <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at neque.</p>

                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <!-- single-well end -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="{{URL::to('public/frontend/img/service/service4.jpg')}}" alt="">
                                    <h4 class="sec-head">Dry Cut</h4>
                                </a>
                                <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at neque.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="well-middle">
                            <div class="single-well">
                                <a href="#">
                                    <img src="{{URL::to('public/frontend/img/service/service5.jpg')}}" alt="">
                                    <h4 class="sec-head">Men’s Cut</h4>
                                </a>
                                <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at neque.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-lg-4 col-md-4 hidden-sm col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="{{URL::to('public/frontend/img/service/service6.jpg')}}" alt="">
                                    <h4 class="sec-head">Women’s Cut </h4>
                                </a>
                                <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at neque.</p>

                            </div>
                        </div>
                    </div>
                    <!-- single-well end -->
                </div>
            </div>
        </div>
        <!-- service-area end -->
           <!-- Start Service Area -->
        <div class="service-area area-padding">
            <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                        <h3>Our Services</h3>
                        <p>Salon Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.</p>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                $all_cuting_price=DB::table('tbl_add_cuting_price')
                                                        ->where('publication_status',1)
                                                        ->get();

                                foreach ($all_cuting_price as $pms_cuting_price) {?>
                                        <tr>
                                            <td>{{$pms_cuting_price->cuting_price_name}}</td>
                                            <td>${{$pms_cuting_price->cuting_price_women}}</td>
                                            <td>${{$pms_cuting_price->cuting_price_mens}}</td>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                $all_special_price=DB::table('tbl_add_special_price')
                                                        ->where('publication_status',1)
                                                        ->get();

                                foreach ($all_special_price as $pms_special_price) {?>
                                        <tr>
                                            <td>{{$pms_special_price->special_price_name}}</td>
                                            <td>${{$pms_special_price->special_price_women}}</td>
                                            <td>${{$pms_special_price->special_price_mens}}</td>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                $all_other_price=DB::table('tbl_add_other_price')
                                                        ->where('publication_status',1)
                                                        ->get();

                                foreach ($all_other_price as $pms_other_price) {?>
                                        <tr>
                                            <td>{{$pms_other_price->other_price_name}}</td>
                                            <td>${{$pms_other_price->other_price_women}}</td>
                                            <td>${{$pms_other_price->other_price_mens}}</td>
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

            

@endsection