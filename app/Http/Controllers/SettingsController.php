<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class SettingsController extends Controller
{
  public function social(){
  	return view('layouts.settings.social_media');
  }

    public function save_social(Request $request){

    	$data=array();
    	$data['id']=$request->id;
    	$data['facebook']=$request->facebook;
    	$data['twitter']=$request->twitter;
    	$data['google_plus']=$request->google_plus;
    	$data['pinteres']=$request->pinteres;

    	DB::table('socialink')->insert($data);
        Session::flash('message',' Social Added Successfully !!');
        return Redirect::to('/social');
    }

    public function all_social()
        {
          $all_social=DB::table('socialink')->get();
          $manage_social=view('layouts.settings.edit_so')
                      ->with('all_social',$all_social);
              return view('layouts.app')
                      ->with('layouts.settings.all_social',$manage_social);
        
        }

    public function edit_social($id)
    {   
        $edit_social= DB::table('socialink')
                ->where('id',$id)
                ->first();
    
        $edit_social=view('layouts.settings.edit_so')
                    ->with('edit_social',$edit_social);
            return view('layouts.app')
                    ->with('layouts.settings.edit_social',$edit_social); 
    }

    public function update_social(Request $request,$id){

    	$data=array();
    	$data['id']=$request->id;
    	$data['facebook']=$request->facebook;
    	$data['twitter']=$request->twitter;
    	$data['google_plus']=$request->google_plus;
    	$data['pinteres']=$request->pinteres;

    	DB::table('socialink')
            ->where('id',$id)
            ->update($data);
            Session::flash('message',' Add Successfully !!');
            return Redirect::to('/add-social/1');
    }

     public function copyright($id)
    {   
        $copyright= DB::table('socialink')
                ->where('id',$id)
                ->first();
    
        $copyright=view('layouts.settings.copyright')
                    ->with('copyright',$copyright);
            return view('layouts.app')
                    ->with('layouts.settings.copyright',$copyright); 
    }

     public function update_copyright(Request $request,$id){

        $data=array();
        $data['id']=$request->id;
        $data['copyright']=$request->copyright;
        

        DB::table('socialink')
            ->where('id',$id)
            ->update($data);
            Session::flash('message',' Added Successfully !!');
            return Redirect::to('/copyright/1');
    }


   
}

