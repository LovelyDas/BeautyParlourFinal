@extends('layouts.app2')
@section('content')

<!-- Start Page Content -->
		<div class="page-content">
			<div class="page-head">
				<div class="blog-overly"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="blog-title text-center">
								 <h2 class="breadcumb-header">Blog</h2>
								 <ul class="page-head-menu">
									<li><i class="fa fa-home"></i><a class="home" href="#"><span>Home</span></a></li>
									<li>Blog</li>
									<li>Blog Grid</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Page Header -->
			<!-- Start Blog Post Area -->
			<div class="blog-post fix">
				<div class="container">
					<div class="row">
						<div class="blog-post-inner blog-grid-post">
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
													<span class="date-time"><i class="fa fa-calendar"></i>feb 18, 2016</span>
												</li>
												<li><a href="#"><i class="fa fa-heart"></i></a>17</li>
												<li><a href="#"><i class="fa fa-comments-o"></i></a>2</li>
											</ul>
										</div>
										
        									<p class="blog-content">
									            {{ str_limit(strip_tags($pms_blog->blog_description),100) }}
									            @if (strlen(strip_tags($pms_blog->blog_description)) > 100)
									              ... <a href="{{URL::to('/blog-details/'.$pms_blog->blog_id)}}" class="btn btn-info btn-sm">Read More</a>
									            @endif
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
		</div>

@endsection