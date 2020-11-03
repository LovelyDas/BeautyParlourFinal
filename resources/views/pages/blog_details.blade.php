@extends('layouts.app2')
@section('content')

<header>
            <!-- header-area start -->
           
            <!-- header-area end -->
          		
        </header>
        <!-- header end -->
		<!-- shop page area start -->
		<div class="blog-details-area">
			<div class="page-head">
				<div class="blog-overly"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="blog-title text-center">
								 <h2 class="breadcumb-header">Blog</h2>
								 <ul class="page-head-menu">
									<li><i class="fa fa-home"></i><a class="home" href="{{URL::to('/')}}"><span>Home</span></a></li>
									<li><a href="{{URL::to('/blog')}}">Blog</a></li>
									<li>Blog Details</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Page Header -->
		<!-- blog side start -->
		<div class="blog-det-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!-- Left Sidebar-->
						<div class="left-sidebar">
							<div class="left-sidebar-title">
								<h4>Bloging options</h4>
							</div>
							<div class="widget widget-categories">
								<h5 class="sidebar-title">Recent Post</h5>
								<div class="widget-item">

									<!-- single-product start -->
									<?php 
                                       $all_blog=DB::table('tbl_add_blog')               
                                            ->where('publication_status',1)
                                                          ->get();
                                                           
                                        foreach ($all_blog as $pms_blog) {
                                            
                                    ?>	
									<div class="widget-product">
										<div class="widget-img">
											<a href="single-product.html">
												<img src="{{URL::to($pms_blog->blog_img)}}" alt="" style=" width:100px; height: 100px;" />
											</a>
										</div>
										<div class="product-info">
											<h5><a href="single-product.html">{{$pms_blog->blog_title_name}}</a></h5>
											<p>{{ str_limit(strip_tags($pms_blog->blog_description),75) }}</p>							
										</div>
									</div>
									 <?php } ?>	
									<!-- single-product end -->	


									
														
								</div>			
							</div>
							<div class="left-sidebar-title">
								<div class="layout-title bottom-tag">
								    <h5 class="sidebar-title">Popular Tags</h5>
									<div class="shop-layout">
										<div class="popular-tag">
											<div class="tag-list">
												<ul>
													<li><a href="#">Hair</a></li>
													<li><a href="#">Style</a></li>
													<li><a href="#">Cutting</a></li>
													<li><a href="#">Celebrity</a></li>
													<li><a href="#">Mackup</a></li>
													<li><a href="#">Styles</a></li>
													<li><a href="#">Men</a></li>
													<li><a href="#">Women</a></li>
													<li><a href="#">Cutting</a></li>
													<li><a href="#">Celebrity</a></li>
													<li><a href="#">Mackup</a></li>
												</ul>
											</div>
											<div class="tag-action">
												<ul>
													<li><a href="#">View all tags</a></li>
												</ul>
											</div>
										</div>
									</div><!-- End Shop Layout -->
								</div>
							</div>
						</div>
					</div>
					<!-- End sideber -->
					<div class="col-lg-8 col-md-8 col-sm-8">

						<!-- single-blog start -->

						<article class="blog-post-wrapper">
							<div class="post-thumbnail">

								<img src="{{URL::to($blog_details->blog_img)}}" alt="" />
							</div>
							<div class="post-information">
								<h4>{{$blog_details->blog_title_name}}</h4>

								<div class="entry-meta">
									<span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
									<span><i class="fa fa-clock-o"></i> march 28, 2016</span>
									<span class="tag-meta">
										<i class="fa fa-folder-o"></i>
										<a href="#">Cutting</a>,
										<a href="#">Hair Styles</a>
									</span>
									<span>
										<i class="fa fa-tags"></i>
										<a href="#">Boy</a>,
										<a href="#"> Girl</a>,
										<a href="#">Baby</a>
									</span>
									<span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>
								</div>

								<div class="entry-content">
									<p>{{$blog_details->blog_description}}</p>
								</div>

								<div class="social-sharing">
									<h3>Share this post</h3>
									<div class="sharing-icon">
										<a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
										<a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
										<a href="#" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a>
										<a href="#" data-toggle="tooltip" title="Google-plus"><i class="fa fa-google-plus"></i></a>
										<a href="#" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</article>


						<div class="clear"></div>
						
						<div id="disqus_thread"></div>
                        <script>

                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://authlarave.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					</div>
				</div>	
			</div>	
		</div>
		<!-- shop area end -->

@endsection