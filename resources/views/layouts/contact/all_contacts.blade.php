@extends('layouts.app')
@section('layouts_content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><i class="fa fa-usd" aria-hidden="true"></i> All Contacts</div>
            	<div class="card-body">
              		<div class="table-responsive">
              			<table id="default-datatable" class="table table-bordered">
						  	<thead>
							  	<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Subject</th>
									<th>Massage</th>
									<th>Actions</th>
							 	 </tr>
						  	</thead>   
						   
						  	<tbody>
								@foreach($all_contacts as $pms_contacts)
						  		<tr>
						  			<td>{{$pms_contacts->contact_id}}</td>
						  			<td>{{$pms_contacts->contact_name}}</td>
						  			<td>{{$pms_contacts->contact_email}}</td>
						  			<td>{{$pms_contacts->contact_subject}}</td>
						  			<td>{{$pms_contacts->contact_massage}}</td>
						  			
						  			<td class="center">
						  				<a class="btn btn-secondary" href="{{URL::to('/view-contact/'. $pms_contacts->contact_id)}}">
						  					<i class="fa fa-eye fa-lg" aria-hidden="true"></i>
						  				</a>

						  				<a class="btn btn-danger" href="{{URL::to('/delete-contact/'. $pms_contacts->contact_id)}}" id="delete">
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