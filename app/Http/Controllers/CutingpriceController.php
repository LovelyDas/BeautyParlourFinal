<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CutingpriceController extends Controller
{
   
    public function add_cuting_price()
    {
        return view('layouts.service_price.add_cuting_price');
    }

    public function save_cuting_price(Request $request)
    {
        $data = array();
        $data['cuting_price_name']=$request->cuting_price_name;
        $data['cuting_price_women']=$request->cuting_price_women;
        $data['cuting_price_mens']=$request->cuting_price_mens;
        $data['publication_status']=$request->publication_status;

            DB::table('tbl_add_cuting_price')->insert($data);
      Session::flash('message',' Cuting Product Added Successfully !!');
      return Redirect::to('/add-cuting-price');
            
    }

    public function all_cuting_price()
    {
        $all_cuting_price=DB::table('tbl_add_cuting_price')->get();
        $manage_cuting_price=view('layouts.service_price.all_cuting_price')
                    ->with('all_cuting_price',$all_cuting_price);
            return view('layouts.app')
                    ->with('layouts.service_price.all_cuting_price',$manage_cuting_price);         
    }

    public function unactive_cuting_price($cuting_price_id)
    {
        DB::table('tbl_add_cuting_price')
            ->where('cuting_price_id',$cuting_price_id)
            ->update(['publication_status' =>0]);
            Session::put('message',' Price unactive Successfully !!');
            return Redirect::to('/all-cuting-price');
    }

    public function active_cuting_price($cuting_price_id)
    {
        DB::table('tbl_add_cuting_price')
            ->where('cuting_price_id',$cuting_price_id)
            ->update(['publication_status' =>1]);
            Session::put('message',' Price active Successfully !!');
            return Redirect::to('/all-cuting-price');
    }

    public function delete_cuting_price($cuting_price_id)
    {
        DB::table('tbl_add_cuting_price')
            ->where('cuting_price_id',$cuting_price_id)
            ->delete();
            Session::put('message',' Price delete Successfully !!');
            return Redirect::to('/all-cuting-price');
    }

    // Edit cuting 
    public function edit_cuting_price($cuting_price_id)
    {   
        $cuting_edit_price= DB::table('tbl_add_cuting_price')
                ->where('cuting_price_id',$cuting_price_id)
                ->first();
    
        $cuting_edit_price=view('layouts.service_price.edit_cuting_price')
                    ->with('cuting_edit_price',$cuting_edit_price);
            return view('layouts.app')
                    ->with('layouts.service_price.cuting_edit_price',$cuting_edit_price); 
    }

    // update cuting 
   public function update_cuting_price(Request $request,$cuting_price_id)
   {  
        $data=array();
        $data['cuting_price_name']=$request->cuting_price_name;
        $data['cuting_price_women']=$request->cuting_price_women;
        $data['cuting_price_mens']=$request->cuting_price_mens;

        DB::table('tbl_add_cuting_price')
            ->where('cuting_price_id',$cuting_price_id)
            ->update($data);
            Session::flash('message',' Cuting Price update Successfully !!');
            return Redirect::to('/all-cuting-price');
   }
}
