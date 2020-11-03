<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class SpecialpriceController extends Controller
{
    public function add_special_price()
    {
    	return view('layouts.service_price.add_special_price');
    }

     public function save_special_price(Request $request)
    {
    	$data = array();
    	$data['special_price_name']=$request->special_price_name;
    	$data['special_price_women']=$request->special_price_women;
    	$data['special_price_mens']=$request->special_price_mens;
    	$data['publication_status']=$request->publication_status;

	    	DB::table('tbl_add_special_price')->insert($data);
      		Session::flash('message',' Special Product Added Successfully !!');
      		return Redirect::to('/add-special-price');
	}

    public function all_special_price()
    {
    	$all_special_price=DB::table('tbl_add_special_price')->get();
        $manage_special_price=view('layouts.service_price.all_special_price')
                    ->with('all_special_price',$all_special_price);
            return view('layouts.app')
                    ->with('layouts.service_price.all_special_price',$manage_special_price);         
    }

    public function unactive_special_price($special_price_id)
    {
    	DB::table('tbl_add_special_price')
            ->where('special_price_id',$special_price_id)
            ->update(['publication_status' =>0]);
            Session::flash('message','Special Price Unactive Successfully !!');
            return Redirect::to('/all-special-price');
    }

    public function active_special_price($special_price_id)
    {
    	DB::table('tbl_add_special_price')
            ->where('special_price_id',$special_price_id)
            ->update(['publication_status' =>1]);
            Session::flash('message','Special Price Active Successfully !!');
            return Redirect::to('/all-special-price');
    }

    public function delete_special_price($special_price_id)
    {
    	DB::table('tbl_add_special_price')
            ->where('special_price_id',$special_price_id)
            ->delete();
            Session::put('message','Special Price unactive Successfully !!');
            return Redirect::to('/all-special-price');
    }

    // Edit manufacture function
    public function edit_special_price($special_price_id)
    {   
        $special_edit_price= DB::table('tbl_add_special_price')
                ->where('special_price_id',$special_price_id)
                ->first();
    
            $special_edit_price=view('layouts.service_price.edit_special_price')
                    ->with('special_edit_price',$special_edit_price);
            return view('layouts.app')
                    ->with('layouts.service_price.special_edit_price',$special_edit_price); 
    }

    // update Special function
   public function update_special_price(Request $request,$special_price_id)
   {  
        $data=array();
        $data['special_price_name']=$request->special_price_name;
    	$data['special_price_women']=$request->special_price_women;
    	$data['special_price_mens']=$request->special_price_mens;

        DB::table('tbl_add_special_price')
            ->where('special_price_id',$special_price_id)
            ->update($data);
            Session::flash('message',' Special Price update Successfully !!');
            return Redirect::to('/all-special-price');
   }

   
}
