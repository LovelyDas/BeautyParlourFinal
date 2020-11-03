@extends('layouts.app')
@section('layouts_content')

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header"><i class="fa fa-table"></i>All Slider</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="default-datatable" class="table table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Slider Name</th>
								<th>Slider Image</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							@foreach($all_slider_img as $pms_slider_img)
							<tr>
								<td>{{$pms_slider_img->slider_img_id}}</td>
								<td>{{$pms_slider_img->slider_img_name}}</td>
								<td><img src="{{$pms_slider_img->slider_image}}"style="width:100px; height:100px;margin-left:25px;"></td>
								<td>
									<a class="btn btn-danger" href="{{URL::to('/delete-slider-img/'.$pms_slider_img->slider_img_id)}}" id="delete">
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