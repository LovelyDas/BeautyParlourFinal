@extends('layouts.app')
@section('layouts_content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"></i> All Big image</div>
            	<div class="card-body">
              		<div class="table-responsive">
              			<table id="default-datatable" class="table table-bordered">
						  	<thead>
							  	<tr>
									<th>ID</th>
									<th>Style Salon Big Image</th>
									<th>Status</th>
									<th>Actions</th>
							 	 </tr>
						  	</thead>   
						    @foreach($all_style_salon_img as $pms_style_salon_img)
						  	<tbody>
								<tr>
									<td>{{$pms_style_salon_img->salon_big_id}}</td>
									<td class="center" style="padding:0px;"><img src="{{URL::to($pms_style_salon_img->salon_big_image)}}"style="width:100px; height:90px;margin-left:25px;"></td>

									<td class="center"style=" padding-top: 16px; ">
									@if($pms_style_salon_img->publication_status==1)
									 <span class="label label-success" style=" background-color: green; border-radius: 3px; padding: 4px; padding-bottom: 7px; color: white; font-weight: bold; ">Active</span>
									@else
									 <span class="label label-success" style=" background-color: red; border-radius: 3px; padding: 4px; padding-bottom: 7px; color: white; font-weight: bold; ">Unactive</span>
									@endif
									</td>
									<td class="center">
									@if($pms_style_salon_img->publication_status==1)
										<a class="btn btn-danger" href="{{URL::to('/unactive-big-img/'. $pms_style_salon_img->salon_big_id)}}">
											<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i>
										</a>
										
									@else
										<a class="btn btn-success" href="{{URL::to('/active-big-img/'. $pms_style_salon_img->salon_big_id)}}">
											<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i>
										</a>
										
									@endif
									   

										<a class="btn btn-danger" href="{{URL::to('/delete-big-img/'.$pms_style_salon_img->salon_big_id)}}">
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