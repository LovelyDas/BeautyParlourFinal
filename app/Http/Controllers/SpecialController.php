<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class SpecialController extends Controller
{
  // Special Function are here
//=========================================================================================   
   public function add_special_img()
   {
    return view('layouts.service_img.add_special_img');
   }
   

   public function save_special_img(Request $request)
          {  
       $data = array();
       $data['special_img_id']=$request->special_img_id;
       $data['special_img_name']=$request->special_img_name;
       $data['publication_status']=$request->publication_status;

       $image=$request->file('special_img');
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
                   $data['special_img']=$image_url;

                   DB::table('tbl_add_special_img')->insert($data);
                   Session::put('message','Special Image Successfully Added !!');
                   return Redirect::to('/add-special-img');
                }
                $data['special_img']='';
                DB::table('tbl_add_special_img')->insert($data);
                Session::put('message','Special Image Successfully Added without image!!');
                return Redirect::to('/add-special-img');
            }
           
        }

        public function all_special_img()
        {
          $all_special_img=DB::table('tbl_add_special_img')->get();
          $manage_cut=view('layouts.service_img.all_special_img')
                      ->with('all_special_img',$all_special_img);
              return view('layouts.app')
                      ->with('layouts.service_img.all_special_img',$manage_cut);
        
        }

         // unactive Service function
        public function special_unactive_img($special_img_id)
          {
            DB::table('tbl_add_special_img')
                  ->where('special_img_id',$special_img_id)
                  ->update(['publication_status' =>0]);
                  Session::put('message',' Service unactive Successfully !!');
                  return Redirect::to('/all-special-img');
          }

         // Active Category function
        public function special_active_img($special_img_id)
          {
            DB::table('tbl_add_special_img')
                ->where('special_img_id',$special_img_id)
                ->update(['publication_status' =>1]);
                Session::put('message',' Category active Successfully !!');
                return Redirect::to('/all-special-img');
          }  

        public function special_img_delete($special_img_id)
          {
             DB::table('tbl_add_special_img')
                ->where('special_img_id',$special_img_id)
                ->delete();
                Session::put('message',' Service Delete Successfully !!');
                return Redirect::to('/all-special-img');
          }

    




}
