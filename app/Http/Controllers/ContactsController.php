<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class ContactsController extends Controller
{
    public function save_contact(Request $request)
     {
     	$data=array();
     	$data['contact_id']=$request->contact_id;
     	$data['contact_name']=$request->contact_name;
     	$data['contact_email']=$request->contact_email;
     	$data['contact_subject']=$request->contact_subject;
     	$data['contact_massage']=$request->contact_massage;
     		  
     		  DB::table('contact')->insert($data);
		      Session::flash('message',' Contact Added Successfully !!');
		      return Redirect::to('/');
     }

     public function all_contacts()
     {
     	$all_contacts=DB::table('contact')->get();
        $manage_contacts=view('layouts.contact.all_contacts')
                      ->with('all_contacts',$all_contacts);
              return view('layouts.app')
                      ->with('layouts.contact.all_contacts',$manage_contacts);

     	
     }

	     // view_contact
     public function view_contact($contact_id)
     {
     	$view_contact= DB::table('contact')
			     	->where('contact_id',$contact_id)
			     	->first();
     	$manage_view_contact=view('layouts.contact.view_contact')
			     	->with('view_contact',$view_contact);
			     	return view('layouts.app')
			     	->with('layouts.contact.view_contact',$manage_view_contact);
     }
     //delete
      public function delete_contact($contact_id)
        {
          DB::table('contact')
            ->where('contact_id',$contact_id)
            ->delete();
            Session::put('message','contact Delete Successfully !!');
            return Redirect::to('/all-contacts');
        }
}
