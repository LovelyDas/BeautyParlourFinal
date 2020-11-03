@extends('layouts.app')
@section('layouts_content')

<div class="row justify-content-center align-middle">
    <div class="col-lg-6">
        <div class="card ">
            <div class="card-header">Contact Massage</div>
            	<div class="card-body">
              		<ul>
              			<p> <b>Name:</b>  {{$view_contact->contact_name}}</p>
              			<p> <b>Email:</b> {{$view_contact->contact_email}}</p>
              			<p> <b>Subject:</b> {{$view_contact->contact_subject}}</p>
              			<p> <b>Massage:</b> {{$view_contact->contact_massage}}</p>
              		</ul>
				</div>
          	</div>
        </div>   
    
</div><!-- End Row-->
		
				 
				






<div class="speach"style=" height: 75px; "></div>


@endsection