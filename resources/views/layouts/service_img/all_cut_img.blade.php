@extends('layouts.app')
@section('layouts_content')
		<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-picture-o" aria-hidden="true"></i> All cutting Image</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Cut Image Name</th>
								  <th>Cut Image</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						    @foreach( $all_cut_img as $pms_cutimg)
						  <tbody>
							<tr>
								<td>{{$pms_cutimg->cut_img_id}}</td>
								<td>{{$pms_cutimg->cut_img_name}}</td>
							
								<td class="center" style="padding:0px;"><img src="{{URL::to($pms_cutimg->cut_img_service)}}"style="width:100px; height:90px;margin-left:25px;"></td>

								<td class="center"style=" padding-top: 16px; ">
									@if($pms_cutimg->publication_status==1)
									<span class="label label-success" style=" background-color: green; border-radius: 3px; padding: 4px; padding-bottom: 7px; color: white; font-weight: bold; ">Active</span>
									@else
									<span class="label label-success" style=" background-color: red; border-radius: 3px; padding: 4px; padding-bottom: 7px; color: white; font-weight: bold; ">Unactive</span>
									 @endif
								</td>
								<td class="center">
									@if($pms_cutimg->publication_status==1)
									<a class="btn btn-danger" href="{{URL::to('/cut-unactive-service/'. $pms_cutimg->cut_img_id)}}">
										<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i>
									</a>
									 @else

									<a class="btn btn-success" href="{{URL::to('/cut-active-service/'. $pms_cutimg->cut_img_id)}}">
										<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i>
									</a>
									 @endif

									<a class="btn btn-danger" href="{{URL::to('/cut-delete-service/'. $pms_cutimg->cut_img_id)}}">
										<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
									</a>
								</td>
							</tr>

							

						  </tbody>
						  @endforeach
					  
 </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
		
				 
				

		<div class="speach"style=" height: 75px; "></div>






      
 @endsection