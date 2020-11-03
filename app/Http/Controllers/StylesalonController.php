<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class StylesalonController extends Controller
{
   public function add_big_image()
   {
   	return view('layouts.style_salon.add_big_img');
   }

    public function save_salon_bigimg(Request $request)
          {  
       $data = array();
       $data['salon_big_id']=$request->cut_img_id;
       $data['publication_status']=$request->publication_status;
	     $image=$request->file('salon_big_image');
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
                   $data['salon_big_image']=$image_url;

                   DB::table('tbl_style_salon_bigimg')->insert($data);
                   Session::put('message','Salon Image Successfully Added !!');
                   return Redirect::to('/add-big-img');
                }
                $data['salon_big_image']='';
                DB::table('tbl_style_salon_bigimg')->insert($data);
                Session::put('message','Salon Image Successfully Added without image!!');
                return Redirect::to('/add-big-img');
            }
           
        }

        public function all_salon_bigimg()
        {
          $all_style_salon_img=DB::table('tbl_style_salon_bigimg')->get();
          $manage_style_salon_img=view('layouts.style_salon.all_big_img')
                                ->with('all_style_salon_img',$all_style_salon_img);
                          return view('layouts.app')
                                ->with('all_style_salon_img',$manage_style_salon_img);
        }


        public function unactive_salon_bigimg($salon_big_id)
        {
          DB::table('tbl_style_salon_bigimg')
            ->where('salon_big_id',$salon_big_id)
            ->update(['publication_status' =>0]);
            Session::flash('message','Style Salon Image Unactive Successfully !!');
            return Redirect::to('/all-big-img');
        }

           public function active_salon_bigimg($salon_big_id)
        {
          DB::table('tbl_style_salon_bigimg')
            ->where('salon_big_id',$salon_big_id)
            ->update(['publication_status' =>1]);
            Session::flash('message','Style Salon Image Unactive Successfully !!');
            return Redirect::to('/all-big-img');
        }

        public function delete_salon_bigimg($salon_big_id)
        {
          DB::table('tbl_style_salon_bigimg')
            ->where('salon_big_id',$salon_big_id)
            ->delete();
            Session::put('message','Special Price unactive Successfully !!');
            return Redirect::to('/all-big-img');
        }



        //==========================================

        public function add_small_image()
        {
          return view('layouts.style_salon.add_small_img');
        }

       public function save_small_image(Request $request)
       {
           $data = array();
           $data['style_salon_small_id']=$request->cut_img_id;
           $data['publication_status']=$request->publication_status;
           $image=$request->file('style_salon_small_img');
            
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
                   $data['style_salon_small_img']=$image_url;

                   DB::table('tbl_style_salon_smallimg')->insert($data);
                   Session::put('message','Salon Image Successfully Added !!');
                   return Redirect::to('/add-small-img');
                }
                   $data['style_salon_small_img']='';
                   DB::table('tbl_style_salon_smallimg')->insert($data);
                   Session::put('message','Salon Image Successfully Added without image!!');
                   return Redirect::to('/add-small-img');
            }
       }

       public function all_small_image()
       {
        $all_style_salon_smallimg=DB::table('tbl_style_salon_smallimg')->get();
        $manage_style_salon_smallimg=view('layouts.style_salon.all_small_img')
                                ->with('all_style_salon_smallimg',$all_style_salon_smallimg);
                          return view('layouts.app')
                                ->with('all_style_salon_smallimg',$manage_style_salon_smallimg);
       }

       public function unactive_salon_smallimg($style_salon_small_id)
       {
        DB::table('tbl_style_salon_smallimg')
            ->where('style_salon_small_id',$style_salon_small_id)
            ->update(['publication_status' =>0]);
            Session::put('message','Special Price unactive Successfully !!');
            return Redirect::to('/all-small-img');
       }



       public function active_salon_smallimg($style_salon_small_id)
       {
        DB::table('tbl_style_salon_smallimg')
            ->where('style_salon_small_id',$style_salon_small_id)
            ->update(['publication_status' =>1]);
            Session::put('message','Style Salon active Successfully !!');
            return Redirect::to('/all-small-img');
       }

        public function delete_salon_smallimg($style_salon_small_id)
       {
        DB::table('tbl_style_salon_smallimg')
            ->where('style_salon_small_id',$style_salon_small_id)
            ->delete();
            Session::put('message','Style Salon active Successfully !!');
            return Redirect::to('/all-small-img');
       }
}
