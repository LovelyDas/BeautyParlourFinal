<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class OtherpriceController extends Controller
{
    public function add_other_price()
    {
    	return view('layouts.service_price.add_other_price');
    }

    //save Other Services
    public function save_other_price(Request $request)
    {
    	$data = array();
    	$data['other_price_name']=$request->other_price_name;
    	$data['other_price_women']=$request->other_price_women;
    	$data['other_price_mens']=$request->other_price_mens;
    	$data['publication_status']=$request->publication_status;

    		DB::table('tbl_add_other_price')->insert($data);
      		Session::flash('message',' Other Service Product Added Successfully !!');
      		return Redirect::to('/add-other-price');
    }

    //all_other_price

    public function all_other_price()
    {
    	$all_other_price=DB::table('tbl_add_other_price')->get();
        $manage_other_price=view('layouts.service_price.all_other_price')
                    ->with('all_other_price',$all_other_price);
            return view('layouts.app')
                    ->with('layouts.service_price.all_other_price',$manage_other_price);
    }


    //unactive_other_price
    public function unactive_other_price($other_price_id)
	{
		DB::table('tbl_add_other_price')
            ->where('other_price_id',$other_price_id)
            ->update(['publication_status' =>0]);
            Session::flash('message','Other Price Unactive Successfully !!');
            return Redirect::to('/all-other-price');
    }

    //Active Other Price
    public function active_other_price($other_price_id)
    {
    	DB::table('tbl_add_other_price')
            ->where('other_price_id',$other_price_id)
            ->update(['publication_status' =>1]);
            Session::flash('message','Other Price active Successfully !!');
            return Redirect::to('/all-other-price');
    }

    //Delete Other price
    public function delete_other_price($other_price_id)
    {
    	DB::table('tbl_add_other_price')
            ->where('other_price_id',$other_price_id)
            ->delete();
            Session::put('message','Other Price delete Successfully !!');
            return Redirect::to('/all-other-price');
    }


    //Edit Other Price
    public function edit_other_price($other_price_id)
    {
        $other_edit_price=DB::table('tbl_add_other_price')
                ->where('other_price_id',$other_price_id)
                ->first();
    
            $other_edit_price=view('layouts.service_price.edit_other_price')
                    ->with('other_edit_price',$other_edit_price);
            return view('layouts.app')
                    ->with('layouts.service_price.other_edit_price',$other_edit_price); 
    }

    //update_other_price
    public function update_other_price(Request $request,$other_price_id)
    {
        $data = array();
        $data['other_price_name']=$request->other_price_name;
        $data['other_price_women']=$request->other_price_women;
        $data['other_price_mens']=$request->other_price_mens;

          DB::table('tbl_add_other_price')
            ->where('other_price_id',$other_price_id)
            ->update($data);
            Session::flash('message',' Other Price update Successfully !!');
            return Redirect::to('/all-other-price');
    }
}
