<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class FeedBackController extends Controller
{
    public function index($id) {

        $appointId   =   Crypt::decrypt($id);
        $appointInfo =   DB::table('tbl_add_appoinment')->where('id', $appointId)->get();
        $appointInfo =   $appointInfo[0];

        $appointedDateTime =  date("Y-m-d H:i:s", strtotime($appointInfo->datepick.$appointInfo->timepick));
        $currentDateTime   =  date('Y-m-d H:i:s');
        $alreadyAdded      =  DB::table('feedback')->where('appoint_id', $appointId)->get();

        if(!$alreadyAdded->isEmpty()) {
            $alreadyAdded =   $alreadyAdded[0];
        }else{
            $alreadyAdded->cmnt = '';
            $alreadyAdded->rating = '';

        }
        return view('pages.add_review', compact('appointInfo', 'appointedDateTime', 'currentDateTime', 'alreadyAdded'));

    }

    public function feedBackAdd(Request $request) {

        $appointId         =    $request->get('appoint_id');
        $feedCmnt          =    $request->get('appoint_cmnt');
        $feedRatings       =    $request->get('rating');
        $appointInfo       =    DB::table('tbl_add_appoinment')->where('id', $appointId)->get();
        $appointInfo       =    $appointInfo[0];

        $data['usr_first_name'] =   $appointInfo->first_name;
        $data['usr_last_name']  =   $appointInfo->last_name;
        $data['appoint_id']     =   $appointId;
        $data['cmnt']           =   $feedCmnt;
        $data['rating']         =   $feedRatings;
        $data['service_name']   =   $appointInfo->service_name;

        $alreadyAdded      =  DB::table('feedback')->where('appoint_id', $appointId)->get();

        if(!$alreadyAdded->isEmpty()) {
            DB::table('feedback')->where('appoint_id', $appointId)->update($data);
        }else{
            DB::table('feedback')->insert($data);
        }



        $notification=array(
            'messege'=>'Feedback save success',
            'alert-type'=>'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function getFeedBacks(Request $request) {

        $serviceName       =    $request->get('serviceName');
        $getAllFeedback    =    DB::table('feedback')->where('service_name', $serviceName)->get();


        return array(
            'feedBacks' =>   $getAllFeedback
        );
    }
}
