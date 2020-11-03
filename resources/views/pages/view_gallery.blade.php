@extends('layouts.app2')
@section('content')
 <!-- Start portfolio Area -->
    
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="awesome-project-content">
                            <!-- single-awesome-project start -->
                            <?php 
                                       $product_by_category=DB::table('tbl_add_gallery_product')               ->where('publication_status',1)
                                                          ->get();
                                                           
                                        foreach ($product_by_category as $pms_gallery_product) {
                                            
                                    ?>
                            <div class="single-awesome-project hair faceial">
                                <div class="awesome-img">
                                    <a href="#"><img src="{{$pms_gallery_product->gallery_product_img}}" alt="" /></a>
                                    <div class="add-actions">
                                        <div class="project-dec">
                                            <h5><a href="#">{{$pms_gallery_product->gallery_product_name}}</a></h5>
                                            <span>{{$pms_gallery_product->gallery_category_id}}</span>
                                        </div>
                                        <ul class="project-action-btn">
                                            <li><a class="venobox" data-gall="myGallery" href="{{$pms_gallery_product->gallery_product_img}}"><i class="fa fa-search-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                             <?php } ?>  
                            <!-- single-awesome-project end -->
                           
                        
                        </div>      
                    </div>
@endsection