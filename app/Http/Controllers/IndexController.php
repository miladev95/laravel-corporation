<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Menu;
class IndexController extends Controller
{
      public function index(){
         $setting = Setting::all();
         $Menu = Menu::all();
         return view('index',compact('setting','Menu'));
      }
}
