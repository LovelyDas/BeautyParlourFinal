<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class OurSpecialTeamController extends Controller
{
    public function add_special_team()
    {
    	return view('layouts.special_team.add_special_team');
    }

    public function save_special_team(Request $request)
    {
       $data = array();
       $data['team_member_id']=$request->team_member_id;
       $data['team_member_name']=$request->team_member_name;
       $data['team_member_information']=$request->team_member_information;
       $data['publication_status']=$request->publication_status;

       $image=$request->file('team_member_image');
         if ($image) 
            {
               $image_name=str_random(20);
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='public/service_img/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);

              if ($success) 
                {
                   $data['team_member_image']=$image_url;

                   DB::table('tbl_add_team_member')->insert($data);
                   Session::put('message','Our Team Added Successfully !!');
                   return Redirect::to('/add-special-team');
                }
                $data['team_member_image']='';
                DB::table('tbl_add_team_member')->insert($data);
                Session::put('message','Our Team Added Successfully !!');
                return Redirect::to('/add-special-team');
            }
    }


    // all Special Team

    public function all_special_team()
    {
    	$all_special_team=DB::table('tbl_add_team_member')->get();
    	$mange_all_special_team=view('layouts.special_team.all_special_team')
    							->with('all_special_team',$all_special_team);
    					return view('layouts.app')
                               ->with('layouts.special_team.all_special_team',$mange_all_special_team);
    }


    public function delete_special_team($team_member_id)
     {
          DB::table('tbl_add_team_member')
           ->where('team_member_id',$team_member_id)
           ->delete();
            Session::put('message',' Service Delete Successfully !!');
            return Redirect::to('/all-special-team');
     }
}
