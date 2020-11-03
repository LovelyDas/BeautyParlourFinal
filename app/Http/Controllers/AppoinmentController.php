<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Mail;
use App\Mail\CancelBooking;
session_start();
class AppoinmentController extends Controller
{
    public function add_appoinment()
    {
        return view('layouts.appoinment.add_appointment');
    }

    public function save_appoinment(Request $request)
     {
     	$data=array();
     	$data['first_name']=$request->first_name;
     	$data['last_name']=$request->last_name;
     	$data['email']=$request->email;
     	$data['phone_number']=$request->phone_number;
     	$data['address']=$request->address;
     	$data['service_name']=$request->service_name;
     	$data['team_member_name']=$request->team_member_name;
     	$data['datepick']=$request->datepick;
     	$data['timepick']=$request->timepick;
        $data['status']=0;
     	DB::table('tbl_add_appoinment')->insert($data);
		      $notification=array(
                                    'messege'=>'Appointment save success',
                                    'alert-type'=>'success'
                                     );
            return Redirect()->back()->with($notification);
     }

     public function all_appoinment()
     {
          $all_appoinment=DB::table('tbl_add_appoinment')->get();
          return view('layouts.appoinment.all_appoinment',compact('all_appoinment'));
     }

     public function view_appoinment($id)
     {
        $view_appoinment= DB::table('tbl_add_appoinment')
                    ->where('id',$id)
                    ->first();
        $manage_view_appoinment=view('layouts.appoinment.view_appoinment')
                    ->with('view_appoinment',$view_appoinment);
                    return view('layouts.app')
                    ->with('layouts.appoinment.view_appoinment',$manage_view_appoinment);
     }

     //delete
      public function delete_appoinment($id)
        {
          DB::table('tbl_add_appoinment')
            ->where('id',$id)
            ->delete();
            $notification=array(
                                    'messege'=>'Appointment Deleted !',
                                    'alert-type'=>'error'
                                     );
            return Redirect()->back()->with($notification);
        }

        //cancel
        public function cancel_appoinment($id)
        {
            $info=DB::table('tbl_add_appoinment')
                     ->where('id',$id)->first();

             DB::table('tbl_add_appoinment')
                     ->where('id',$id)
                     ->update(['status'=>2]);
            //dd($info->email);

            Mail::to($info->email)->queue( new CancelBooking());
                     
             $notification=array(
                                    'messege'=>'Oops! Appointment Cancel',
                                    'alert-type'=>'warning'
                                     );
            return Redirect()->back()->with($notification);
        }
}
