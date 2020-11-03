<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class OtherServiceController extends Controller
{
    public function add_other_img()
    {
    	return view('layouts.service_img.add_other_img');
    }


    public function save_other_img(Request $request)
          {  
       $data = array();
       $data['other_img_id']=$request->other_img_id;
       $data['other_img_name']=$request->other_img_name;
       $data['publication_status']=$request->publication_status;

       $image=$request->file('other_image');
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
                   $data['other_image']=$image_url;

                   DB::table('tbl_add_other_img')->insert($data);
                   Session::put('message','Other Service image Successfully Added !!');
                   return Redirect::to('/add-other-img');
                }
                $data['other_image']='';
                DB::table('tbl_add_other_img')->insert($data);
                Session::put('message','Service Successfully Added without image!!');
                return Redirect::to('/add-other-img');
            }
           
        }



         public function all_other_img()
     {
          $all_other_img=DB::table('tbl_add_other_img')->get();
          $other_service=view('layouts.service_img.all_other_img')
                      ->with('all_other_img',$all_other_img);
              return view('layouts.app')
                      ->with('layouts.service_img.all_other_img',$other_service);
     }


           // unactive Service function
   public function unactive_other_service($other_img_id)
   {
      DB::table('tbl_add_other_img')
            ->where('other_img_id',$other_img_id)
            ->update(['publication_status' =>0]);
            Session::put('message','Other Service unactive Successfully !!');
            return Redirect::to('/all-other-img');
   }

    // Active Category function
   public function active_other_service($other_img_id)
   {
      DB::table('tbl_add_other_img')
            ->where('other_img_id',$other_img_id)
            ->update(['publication_status' =>1]);
            Session::put('message',' Other Service active Successfully !!');
            return Redirect::to('/all-other-img');
   }

        // Delete other service function
   public function all_delete_service($other_img_id)
   {
            
            DB::table('tbl_add_other_img')
            ->where('other_img_id',$other_img_id)
            ->delete();
            Session::put('message','Other Service Delete Successfully !!');
            return Redirect::to('/all-other-img');
   }
}
