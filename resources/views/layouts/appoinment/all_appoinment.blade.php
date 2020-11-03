
@extends('layouts.app')
@section('layouts_content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"> All Contacts</div>
            	<div class="card-body">
              		<div class="table-responsive">
              			<table id="default-datatable" class="table table-bordered">
						  	<thead>
							  	<tr>
									<th>Status</th>
									<th>Name</th>
		
									<th>Mobile No</th>
									<th>Service Name</th>
									<th>Member Name</th>
									<th>Actions</th>
							 	 </tr>
						  	</thead>   
						   
						  	<tbody>
								@foreach($all_appoinment as $pms_appoinment)
						  		<tr>
						  			<td>
						  				@if($pms_appoinment->status == 0)
						  				 <span class="badge badge-warning">Pending</span>
						  				@elseif($pms_appoinment->status == 1)
						  				 <span class="badge badge-success">Success</span>
						  				@else
						  				 <span class="badge badge-danger">Cancel</span>
						  				@endif
						  			</td>
						  			<td>{{$pms_appoinment->first_name}}</td>

						  			<td>{{$pms_appoinment->phone_number}}</td>
						  			<td>{{$pms_appoinment->service_name}}</td>
						  			<td>{{$pms_appoinment->team_member_name}}</td>
						  		
						  			
						  			<td class="center">
						  				<a  class="btn btn-secondary" href="{{URL::to('/view-appoinment/'. $pms_appoinment->id)}}">
						  					<i class="fa fa-eye fa-lg" aria-hidden="true"></i>
						  				</a>

						  				@if($pms_appoinment->status == 1 || $pms_appoinment->status == 0)
						  				<a  class="btn btn-warning" href="{{URL::to('/cancel-appoinment/'. $pms_appoinment->id)}}" id="cancel">
						  					X
						  				</a>

						  				<a class="btn btn-danger" href="{{URL::to('/Delete-appoinment/'. $pms_appoinment->id)}}" id="delete">
						  					<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
						  				</a>
						  				@else
						  				@endif
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