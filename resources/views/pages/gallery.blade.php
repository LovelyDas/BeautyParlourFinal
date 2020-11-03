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
								 <h2 class="breadcumb-header">portfolio</h2>
								 <ul class="page-head-menu">
									<li><i class="fa fa-home"></i><a class="home" href="#"><span>Home</span></a></li>
									<li>Portfolio</li>
									<li>Portfolio 1</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Page Header -->
		<!-- Start portfolio Area -->
		<div class="portfolio-area area-padding fix">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h3>Our Portfolio</h3>
							<p>Salon Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Start Portfolio -page -->
					<div class="awesome-project-1 fix">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="awesome-menu ">
								<ul class="project-menu">
									<li><a href="#" class="active" data-filter="*" >All</a></li>
									<li><a href="#" data-filter=".hair">hair</a></li>
									<li><a href="#" data-filter=".faceial">faceial</a></li>
									<li><a href="#" data-filter=".makeup">makeup</a></li>
								</ul>				
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="awesome-project-content">
							
							
							<!-- single-awesome-project start -->
							<?php 
                                       $all_gallery_product=DB::table('tbl_add_gallery_product')               ->where('publication_status',1)
                                                          ->get();
                                                           
                                        foreach ($all_gallery_product as $pms_gallery_product) {
                                            
                                    ?>
							<div class="single-awesome-project hair faceial makeup">
								<div class="awesome-img">
									<a href="#"><img src="{{$pms_gallery_product->gallery_product_img}}" alt="" /></a>
									<div class="add-actions">
										<div class="project-dec">
											<h5><a href="#">{{$pms_gallery_product->gallery_product_name}}</a></h5>
											<span>{{$pms_gallery_product->gallery_category_id}}</span>
										</div>
										<ul class="project-action-btn">
											<li><a class="venobox" data-gall="myGallery" href="img/portfolio/port3.jpg"><i class="fa fa-search-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-link"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							 <?php } ?>
							<!-- single-awesome-project end -->
						
						
							
					
						</div>		
					</div>		
				</div>	
			</div>	
		</div>
		<!-- awesome-portfolio end -->


        <!-- Start portfolio Area -->
        <div class="gallary-area area-padding fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Our Gallery</h3>
                            <p>Salon Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br/>  Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="gallary-details fix">
                        <!-- single-gallery start -->
                        <?php 
                            $all_gallery_product=DB::table('tbl_add_gallery_product')               ->where('publication_status',1)
                                                          ->get();
                                foreach ($all_gallery_product as $pms_gallery_product) {
                                            
                        ?>
                        <div class="single-awesome-portfolio">
                            <div class="awesome-img">
                                <img src="{{$pms_gallery_product->gallery_product_img}}" alt="" />
                                <div class="add-actions">
                                    <ul class="project-action-btn">
                                        <li><a class="venobox" data-gall="myGallery" href="{{$pms_gallery_product->gallery_product_img}}"><i class="fa fa-search-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                        
                        
                      
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- awesome-portfolio end -->



@endsection