<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class SliderController extends Controller
{
    public function add_slider_img()
	{  
    	return view('layouts.slider.add_slider');
    }

    public function save_slider_img(Request $request)
    { 
    	$data= array();
    	$data['slider_img_id']=$request->slider_img_id;
    	$data['slider_img_name']=$request->slider_img_name;
    	$data['publication_status']=$request->publication_status;

    	$image=$request->file('slider_image');
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
                   $data['slider_image']=$image_url;

                   DB::table('tbl_add_slider')->insert($data);
                   Session::put('message','Slider image Successfully Added !!');
                   return Redirect::to('/add-slider-img');
                }
                $data['slider_image']='';
                DB::table('tbl_add_slider')->insert($data);
                Session::put('message','Slider Successfully Added without image!!');
                return Redirect::to('/add-slider-img');
            }
    	}


    	public function all_slider_img()
    	{  
    		$all_slider_img=DB::table('tbl_add_slider')->get();
        $mange_allslider_img=view('layouts.slider.all_slider_img')
        ->with('all_slider_img',$all_slider_img);
        return view('layouts.app')
        ->with('layouts.slider.all_slider_img',$mange_allslider_img);
        
      }

      public function delete_slider_img($slider_img_id)
      {
        DB::table('tbl_add_slider')
        ->where('slider_img_id',$slider_img_id)
        ->delete();
        Session::put('message',' Service Delete Successfully !!');
        return Redirect::to('/all-slider-img');
      }

 }
