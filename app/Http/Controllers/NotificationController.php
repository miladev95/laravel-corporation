<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Menu;
use App\News;
use App\Setting;
use Illuminate\Http\Request;
use App\Notification;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function index(){
        $setting = Setting::all();
        $Menu = Menu::all();
        $gallery = Gallery::all()->take(3);
        $notification =  DB::table('notification')->latest('id')->first();
        return view('notification',compact('notification','setting','Menu','gallery'));
    }
}
