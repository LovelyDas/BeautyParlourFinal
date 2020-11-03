<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use AuthenticatesUsers;
class CutingController extends Controller
{
  

  public function services_img()
  {  
    return view ('layouts.service_img.add_cut_img');
  }




  public function save_image(Request $request)
  {  
   $data = array();
   $data['cut_img_id']=$request->cut_img_id;
   $data['cut_img_name']=$request->cut_img_name;
   $data['publication_status']=$request->publication_status;

   $image=$request->file('cut_img_service');
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
       $data['cut_img_service']=$image_url;

       DB::table('tbl_add_cuting_img')->insert($data);
       Session::put('message','Service Successfully Added !!');
       return Redirect::to('/add-cut-img');
     }
     $data['cut_img_service']='';
     DB::table('tbl_add_cuting_img')->insert($data);
     Session::put('message','Service Successfully Added without image!!');
     return Redirect::to('/add-cut-img');
   }

 }

 public function all_cut_img()
 {
  $all_cut_img=DB::table('tbl_add_cuting_img')->get();
  $manage_cut=view('layouts.service_img.all_cut_img')
  ->with('all_cut_img',$all_cut_img);
  return view('layouts.app')
  ->with('layouts.service_img.all_cut_img',$manage_cut);

}

// unactive Service function
public function cut_unactive_service($cut_img_id)
{
  DB::table('tbl_add_cuting_img')
  ->where('cut_img_id',$cut_img_id)
  ->update(['publication_status' =>0]);
  Session::put('message',' Service unactive Successfully !!');
  return Redirect::to('/all-cut-img');
}

// Active Category function
public function cut_active_service($cut_img_id)
{
  DB::table('tbl_add_cuting_img')
  ->where('cut_img_id',$cut_img_id)
  ->update(['publication_status' =>1]);
  Session::put('message',' Category active Successfully !!');
  return Redirect::to('/all-cut-img');
}

// Delete service function
public function cut_delete_service($cut_img_id)
{

  DB::table('tbl_add_cuting_img')
  ->where('cut_img_id',$cut_img_id)
  ->delete();
  Session::put('message',' Service Delete Successfully !!');
  return Redirect::to('/all-cut-img');
}


}
