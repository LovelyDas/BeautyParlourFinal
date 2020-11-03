<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
     public function index()
    {
        return view('pages.service');
    }
      public function sub_services_1()
    {
        return view('pages.sub_services_1');
    }
      public function sub_services_2()
    {
        return view('pages.sub_services_2');
    }
      public function sub_services_3()
    {
        return view('pages.sub_services_3');
    }
}
