<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Menu;
use App\Slider;
use App\Notification;
class IndexController extends Controller
{
      public function index(){
         $setting = Setting::all();
         $slider = Slider::all();
         $Menu = Menu::all();
         $notification = Notification::latest('id')->first();
         return view('index',compact('setting','Menu','slider','notification'));
      }
}
