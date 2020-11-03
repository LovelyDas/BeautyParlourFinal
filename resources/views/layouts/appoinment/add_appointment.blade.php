@extends('layouts.app')
@section('layouts_content')
@php 
	$service=DB::table('tbl_add_cuting_price')->get();
	$member=DB::table('tbl_add_team_member')->get();
@endphp
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            	

              <form action="{{route('store.appointment')}}" method="post" enctype="multipart/form-data">
              	{{ csrf_field ()}}
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user" aria-hidden="true"></i>
                   New Appointment
                  </h4>

               <div class="form-row">
                 <div class="form-group col-md-4">
                   <label for="input-8">First Name</label>
                   <input type="text" name="first_name"class="form-control" id="input-5">
                 </div>

                 <div class="form-group col-md-4">
                   <label for="input-8">Last Name</label>
                   <input type="text" name="last_name"class="form-control" id="input-5">
                 </div>

                 <div class="form-group col-md-4">
                   <label for="input-8">Email</label>
                   <input type="text" name="email"class="form-control" id="input-5">
                 </div>
               </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="input-8">Phone Number</label>
                    <input type="text" name="phone_number"class="form-control" id="input-5">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="input-8">Address</label>
                    <input type="text" name="address"class="form-control" id="input-5">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="input-8">Service Name</label>
                     <select class="form-control" name="service_name" required>
                     	@foreach($service as $row)
                     	   <option value="{{ $row->cuting_price_name }}">{{ $row->cuting_price_name }}</option>
                     	 @endforeach
                     </select>
                  </div>
                </div>

                  <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="input-8">Team Name</label>
                     <select class="form-control" name="team_member_name" required>
                     	@foreach($member as $row)
                     	   <option value="{{ $row->team_member_name }}">{{ $row->team_member_name }}</option>
                     	 @endforeach
                     </select>
                  </div>
                

                  <div class="form-group col-md-4">
                    <label for="input-8">Date</label>
                    <input type="date" name="datepick"class="form-control" id="txtDate" required="">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="input-8">Time</label>
                    <input type="time" name="timepick"class="form-control" id="input-5" required="">
                  </div>
                </div>

       
               
                <div class="form-footer">
                 
                  <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i>Add</button>
                    <p class="mgs"style="color: #09b910;margin-top:-39px;margin-left:36px;font-weight: 600;font-size:16px;">
                     <?php
                      $messege=Session::get('messege');
                       if($messege)
                     {
                      echo $messege;
                       Session::flash('messege',null );
                      }
                    ?>
                  </p> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
<script type="text/javascript">
	$(function(){
	    var dtToday = new Date();
	    
	    var month = dtToday.getMonth() + 1;
	    var day = dtToday.getDate();
	    var year = dtToday.getFullYear();
	    if(month < 10)
	        month = '0' + month.toString();
	    if(day < 10)
	        day = '0' + day.toString();
	    
	    var minDate= year + '-' + month + '-' + day;
	    
	    $('#txtDate').attr('min', minDate);
	});
</script>
@endsection