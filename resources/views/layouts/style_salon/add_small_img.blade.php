@extends('layouts.app')
@section('layouts_content')

 
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form action="{{url('/save-small-img')}}" method="post" enctype="multipart/form-data">
              	{{ csrf_field ()}}
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-file-text-o"></i>
                   Add Style Salon Small Image
                  </h4>
               

                <div class="form-group">
                  <label for="input-8">Select Style Salon Small Image</label>
                  <input type="file" name="style_salon_small_img" class="form-control" id="input-8">
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
                  <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i>Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

 @endsection