@extends('layouts.app')
@section('layouts_content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"></i> All Special Price</div>
            	<div class="card-body">
              		<div class="table-responsive">
              			<table id="default-datatable" class="table table-bordered">
						  	<thead>
							  	<tr>
									<th>ID</th>
									<th>Special Name</th>
									<th>Special Womens Price</th>
									<th>Special Mens Price</th>
									<th>Status</th>
									<th>Actions</th>
							 	 </tr>
						  	</thead>   
						    @foreach($all_special_price as $pms_special_price)
						  	<tbody>
								<tr>
									<td>{{$pms_special_price->special_price_id}}</td>
									<td>{{$pms_special_price->special_price_name}}</td>
									<td>{{$pms_special_price->special_price_women}}tk</td>
									<td>{{$pms_special_price->special_price_mens}}tk</td>

									<td class="center"style=" padding-top: 16px; ">
									@if($pms_special_price->publication_status==1)
									 <span class="label label-success" style=" background-color: green; border-radius: 3px; padding: 4px; padding-bottom: 7px; color: white; font-weight: bold; ">Active</span>
									@else
									 <span class="label label-success" style=" background-color: red; border-radius: 3px; padding: 4px; padding-bottom: 7px; color: white; font-weight: bold; ">Unactive</span>
									@endif
									</td>
									<td class="center">
									@if($pms_special_price->publication_status==1)
										<a class="btn btn-danger" href="{{URL::to('/unactive-special-price/'. $pms_special_price->special_price_id)}}">
											<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i>
										</a>
										
									@else
										<a class="btn btn-success" href="{{URL::to('/active-special-price/'. $pms_special_price->special_price_id)}}">
											<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i>
										</a>
										
									@endif
									    <a class="btn btn-info" href="{{URL::to('/edit-special-price/'. $pms_special_price->special_price_id)}}">
										<i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>

										<a class="btn btn-danger" href="{{URL::to('/delete-special-price/'.$pms_special_price->special_price_id)}}" id="delete">
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