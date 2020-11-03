@extends('layouts.app')
@section('layouts_content')

<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form action="{{url('/update-blog',$edit_blog->blog_id)}}" method="post" enctype="multipart/form-data">
              	{{ csrf_field ()}}
                <h4 class="form-header text-uppercase">
                    <i class="fa fa-th" aria-hidden="true"></i>
                  Add New Blog
                  </h4>
                <div class="form-group">
                  <label for="input-8">Enter Blog Title</label>
                  <input type="text" name="blog_title_name" value="{{$edit_blog->blog_title_name}}" class="form-control" id="input-5">
                </div>

                 <div class="form-group">
                  <label for="input-17">Enter Blog Description</label>
                  <textarea class="form-control" name="blog_description" rows="4" id="input-17">{{$edit_blog->blog_description}}</textarea>
                </div>

               

                <div class="form-group">
                  <label for="input-8">Select Image</label>
                  <input type="file" name="blog_img" value="{{$edit_blog->blog_img}}" class="form-control" id="input-8">
                </div>

                <div class="form-group row">
                  <label for="input-8" class="col-sm-6 col-form-label">Publication Status</label>
                  <div class="col-sm-10">
                     <input type="checkbox" name="publication_status"  value="1" id="md_checkbox_2" class="chk-col-success"  />
                     <label for="md_checkbox_2"></label>

                      <p class="mgs"style="color: #09b910;margin-top:-39px;margin-left:36px;font-weight: 600;font-size:16px;">
                       <?php
                        $message=Session::get('message');
                         if($message)
                       {
                        echo $message;
                         Session::flash('message',null );
                        }
                      ?>
                    </p> 
                  </div>
                </div>
               
                <div class="form-footer">
                  <button type="submit" class="btn btn-dark shadow-dark m-1"><i class="fa fa-times"></i> Cancel</button>
                  <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i>update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

@endsection