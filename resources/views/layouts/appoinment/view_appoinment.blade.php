@extends('layouts.app')
@section('layouts_content')

<div class="row justify-content-center align-middle">
    <div class="col-lg-6">
        <div class="card ">
            <div class="card-header">Appoinment List
                    <a class="btn btn-success pull-right" href="{{URL::to('/all-appoinment')}}">Go Back</a>
            </div>
            	<div class="card-body">
              		<ul>
              			<p> <b>Full Name:</b> {{$view_appoinment->first_name}} {{$view_appoinment->last_name}}</p>
              			<p> <b>Email:</b> {{$view_appoinment->email}}</p>
              			<p> <b>Phone Number:</b> {{$view_appoinment->phone_number}}</p>
              			<p> <b>Address:</b> {{$view_appoinment->address}}</p>
              			<p> <b>Service Name:</b> {{$view_appoinment->service_name}}</p>
              			<p> <b>Employer Name:</b> {{$view_appoinment->team_member_name}}</p>
              			<p> <b>Date:</b> {{$view_appoinment->datepick}}</p>
              			<p> <b>Time:</b> {{$view_appoinment->timepick}}</p>
                    <p> <b>Status:</b> @if($view_appoinment->status == 0)
                       <span class="badge badge-warning">Pending</span>
                      @elseif($view_appoinment->status == 1)
                       <span class="badge badge-success">Success</span>
                      @else
                       <span class="badge badge-danger">Cancel</span>
                      @endif</p>
              		</ul>
				      </div>
              @if($view_appoinment->status == 1 || $view_appoinment->status == 0)
              <a class="btn btn-danger pull-right" href="{{URL::to('/cancel-appoinment/'.$view_appoinment->id)}}" id="cancel">Appointment Cancel</a>
              @else
              @endif

          	</div>
        </div>   
    
</div><!-- End Row-->
		
				 
				






<div class="speach"style=" height: 75px; "></div>


@endsection