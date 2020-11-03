<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class GalleryController extends Controller
{
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function add_gallery_category()
    {
        return view('layouts.gallery.add_gallery_category');
    }
     //Save Gallery Category
    public function save_gallery_category(Request $request)
      {
    	$data= array();
    	$data['gallery_category_id']=$request->gallery_category_id;
    	$data['gallery_category_name']=$request->gallery_category_name;
    	$data['publication_status']=$request->publication_status;

    	DB::table('tbl_add_gallery_category')->insert($data);
      		Session::flash('message','Gallery Category Added Successfully !!');
      		return Redirect::to('/add-gallery-category');
    }
    //All Gallery Category
    public function all_gallery_category()
    {
    	$all_gallery_category=DB::table('tbl_add_gallery_category')->get();
    	$manage_gallery_category=view('layouts.gallery.all_gallery_category')
    						->with('all_gallery_category',$all_gallery_category);
    				return view('layouts.app')
    					->with('layouts.gallery.all_gallery_category',$manage_gallery_category);		
    }





    
    
    public function add_gallery_product()
    {
      return view('layouts.gallery.add_gallery_product');
    }

    //Save Gallery Product
    public function save_gallery_product(Request $request)
     {
    	$data= array();
    	$data['gallery_product_name']=$request->gallery_product_name;
    	$data['gallery_category_id']=$request->gallery_category_id;
    	$data['publication_status']=$request->publication_status;

    	$image=$request->file('gallery_product_img');
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
                   $data['gallery_product_img']=$image_url;

                   DB::table('tbl_add_gallery_product')->insert($data);
                   Session::put('message','Gallery Product Successfully Added !!');
                   return Redirect::to('/add-gallery-product');
                }
                $data['gallery_product_img']='';
                DB::table('tbl_add_gallery_product')->insert($data);
                Session::put('message','Gallery Product Successfully Added without image!!');
                return Redirect::to('/add-gallery-product');
            }

    }

    //All Gallery Product
    public function all_gallery_product()
    {
      $all_gallery_product=DB::table('tbl_add_gallery_product')
                    ->join('tbl_add_gallery_category','tbl_add_gallery_product.gallery_category_id','=','tbl_add_gallery_category.gallery_category_id')
                    ->select('tbl_add_gallery_product.*','tbl_add_gallery_category.gallery_category_name')
                   ->where('tbl_add_gallery_product.publication_status', 1)
                   ->get();

        $manage_product=view('layouts.gallery.all_gallery_product')
                 ->with('all_gallery_product',$all_gallery_product);
         return view('layouts.app')
                 ->with('layouts.gallery.all_gallery_product',$manage_product); 
    }
    
 

    public function view_gallary ($gallery_category_id)
    {
       $view_gallary_product=DB::table('tbl_add_gallery_product')
        ->join('tbl_add_gallery_category','tbl_add_gallery_product.gallery_category_id','=','tbl_add_gallery_category.gallery_category_id')
        ->select('tbl_add_gallery_product.*','tbl_add_gallery_category.gallery_category_name')
        ->where('tbl_add_gallery_category.gallery_category_id',$gallery_category_id)
        ->where('tbl_add_gallery_product.publication_status',1)
        ->get();

         $manage_product_by_category=view('welcome')
            ->with('view_gallary_product',$view_gallary_product);
        return view('welcome',$manage_product_by_category);
            
    }	
   

}
