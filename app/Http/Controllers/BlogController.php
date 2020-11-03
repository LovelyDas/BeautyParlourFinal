<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class BlogController extends Controller
{
    public function blog()
     {
     	return view('pages.blog');
     }
      public function index()
     {
      return view('layouts.blog.add_blog');
     }

    public function save_blog(Request $request) 
     {
     	$data=array();
     	$data['blog_title_name']=$request->blog_title_name;
     	$data['blog_description']=$request->blog_description;
     	$data['publication_status']=$request->publication_status;

     	$image=$request->file('blog_img');
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
                   $data['blog_img']=$image_url;

                   DB::table('tbl_add_blog')->insert($data);
                   Session::put('message','Blog Successfully Added !!');
                   return Redirect::to('/add-blog');
                }
                $data['blog_img']='';
                DB::table('tbl_add_blog')->insert($data);
                Session::put('message','Blog Successfully Added without image!!');
                return Redirect::to('/add-blog');
            
              
            }
     }

     public function all_blog()
      {
      	$all_blog=DB::table('tbl_add_blog')->get();
        $manage_blog=view('layouts.blog.all_blog')
                    ->with('all_blog',$all_blog);
            return view('layouts.app')
                    ->with('layouts.blog.all_blog',$manage_blog);         
      
      }

      // unactive blog
       public function unactive_blog($blog_id)
       {
        DB::table('tbl_add_blog')
            ->where('blog_id',$blog_id)
            ->update(['publication_status' =>0]);
            Session::put('message','Blog unactive Successfully !!');
            return Redirect::to('/all-blog');
       }

       // active blog
       public function active_blog($blog_id)
       {
        DB::table('tbl_add_blog')
            ->where('blog_id',$blog_id)
            ->update(['publication_status' =>1]);
            Session::put('message','Blog active Successfully !!');
            return Redirect::to('/all-blog');
       }

       // Delete Blog
       public function delete_blog($blog_id)
       {
        DB::table('tbl_add_blog')
            ->where('blog_id',$blog_id)
            ->delete();
            Session::put('message','Blog active Successfully !!');
            return Redirect::to('/all-blog');
       }

       // Edit Blog
       public function edit_blog($blog_id)
        {
        	$edit_blog= DB::table('tbl_add_blog')
                ->where('blog_id',$blog_id)
                ->first();
    
            $manage_blog=view('layouts.blog.edit_blog')
                    ->with('edit_blog',$edit_blog);
            return view('layouts.app')
                    ->with('layouts.blog.edit_blog',$manage_blog); 
        }
      // update blog
      public function update_blog(Request $request,$blog_id)
	   {  
	      $data=array();
	     	$data['blog_title_name']=$request->blog_title_name;
	     	$data['blog_description']=$request->blog_description;
	      $data['publication_status']=$request->publication_status;
  

	        DB::table('tbl_add_blog')
	            ->where('blog_id',$blog_id)
	            ->update($data);
	            Session::flash('message',' Update Blog Successfully !!');
	            return Redirect::to('/all-blog');
	   } 



     //blog details


        public function blog_details($blog_id)
     {
      $blog_details= DB::table('tbl_add_blog')
            ->where('blog_id',$blog_id)
            ->first();
      $manage_view_contact=view('pages.blog_details')
            ->with('blog_details',$blog_details);
            return view('layouts.app2')
            ->with('pages.blog_details',$manage_view_contact);
     }
}

