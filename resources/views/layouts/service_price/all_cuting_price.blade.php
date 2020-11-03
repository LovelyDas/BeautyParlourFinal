@extends('layouts.app')
@section('layouts_content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"></i> All Cuting Price</div>
            	<div class="card-body">
              		<div class="table-responsive">
              			<table id="default-datatable" class="table table-bordered">
						  	<thead>
							  	<tr>
									<th>ID</th>
									<th>Cuting Name</th>
									<th>Cuting Womens Price</th>
									<th>Cuting Mens Price</th>
									<th>Status</th>
									<th>Actions</th>
							 	 </tr>
						  	</thead>   
						    @foreach($all_cuting_price as $pms_cuting_price)
						  	<tbody>
								<tr>
									<td>{{$pms_cuting_price->cuting_price_id}}</td>
									<td>{{$pms_cuting_price->cuting_price_name}}</td>
									<td>{{$pms_cuting_price->cuting_price_women}}tk</td>
									<td>{{$pms_cuting_price->cuting_price_mens}}tk</td>

									<td class="center"style=" padding-top: 16px; ">
									@if($pms_cuting_price->publication_status==1)
									 <span class="label label-success" style=" background-color: green; border-radius: 3px; padding: 4px; padding-bottom: 7px; color: white; font-weight: bold; ">Active</span>
									@else
									 <span class="label label-success" style=" background-color: red; border-radius: 3px; padding: 4px; padding-bottom: 7px; color: white; font-weight: bold; ">Unactive</span>
									@endif
									</td>
									<td class="center">
									@if($pms_cuting_price->publication_status==1)
										<a class="btn btn-danger" href="{{URL::to('/unactive-cuting-price/'. $pms_cuting_price->cuting_price_id)}}">
											<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i>
										</a>
										
									@else
										<a class="btn btn-success" href="{{URL::to('/active-cuting-price/'. $pms_cuting_price->cuting_price_id)}}">
											<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i>
										</a>
										
									@endif
									    <a class="btn btn-info" href="{{URL::to('/edit-cuting-price/'. $pms_cuting_price->cuting_price_id)}}">
										<i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>

										<a class="btn btn-danger" href="{{URL::to('/delete-cuting-price/'.$pms_cuting_price->cuting_price_id)}}" id="delete">
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