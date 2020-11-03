@extends('layouts.app')
@section('layouts_content')

 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Blog Title</th>
                        <th>Blog Image</th>
                        <!-- <th>Blog Description</th> -->
                        <th>Status</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($all_blog as $pms_blog)
                    <tr>
                        <td>{{$pms_blog->blog_id}}</td>
                        <td>{{$pms_blog->blog_title_name}}</td>
                        <td><img src="{{URL::to($pms_blog->blog_img)}}"style="width:100px; height:100px;margin-left:25px;"></td>
                       <!--  <td>{{$pms_blog->blog_description}}</td> -->
                        <td class="center"style=" padding-top: 16px; ">
						@if($pms_blog->publication_status==1)
						 <span class="label label-success" style=" background-color: green; border-radius: 3px; padding: 4px; padding-bottom: 7px; color: white; font-weight: bold; ">Active</span>
						@else
						 <span class="label label-success" style=" background-color: red; border-radius: 3px; padding: 4px; padding-bottom: 7px; color: white; font-weight: bold; ">Unactive</span>
						@endif
						</td>
                        <td>
                        	@if($pms_blog->publication_status==1)
										<a class="btn btn-danger" href="{{URL::to('/unactive-blog/'. $pms_blog->blog_id)}}">
											<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i>
										</a>
										
									@else
										<a class="btn btn-success" href="{{URL::to('/active-blog/'. $pms_blog->blog_id)}}">
											<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i>
										</a>
										
									@endif
                            <a class="btn btn-info" href="{{URL::to('/edit-blog/'. $pms_blog->blog_id)}}">
                                <i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                            </a>

                            <a class="btn btn-danger" href="{{URL::to('/delete-blog/'. $pms_blog->blog_id)}}">
                                <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
                            </a>
                        </td>
                        
                    </tr>
                  @endforeach
                 </tbody>
                
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
        
                 
                

        <div class="speach"style=" height: 75px; "></div>




@endsection