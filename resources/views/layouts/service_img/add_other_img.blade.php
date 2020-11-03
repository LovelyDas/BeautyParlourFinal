@extends('layouts.app')
@section('layouts_content')

 
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form action="{{url('/save-other-img')}}" method="post" enctype="multipart/form-data">
              	{{ csrf_field ()}}
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-file-text-o"></i>
                   Add Other Service Image
                  </h4>
                <div class="form-group">
                  <label for="input-8">Enter Other Service Name</label>
                  <input type="text" name="other_img_name"class="form-control" id="input-5">
                </div>

                <div class="form-group">
                  <label for="input-8">Select Other Service Image</label>
                  <input type="file" name="other_image" class="form-control" id="input-8">
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
                         Session::put('message',null );
                        }
                      ?>
                    </p> 
                  </div>
                </div>
               
                <div class="form-footer">
                  <button type="submit" class="btn btn-dark shadow-dark m-1"><i class="fa fa-times"></i> Cancel</button>
                  <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i>add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

 @endsection