<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class IndexController extends Controller
{
    public function index(){
      $setting = Setting::all();
      return view('index',compact('setting'));
    }
}
