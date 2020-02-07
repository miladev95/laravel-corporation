<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Menu;
use App\Setting;
use Illuminate\Http\Request;

class SingleNewsController extends Controller
{
    public function index(Request $request){
        $Menu = Menu::all();
        $setting = Setting::all();
        $gallery = Gallery::all()->take(3);
        if($request->has("id")){
            $id = $request->get("id");
            return view('singlenews');
        }else {
            return view('404',compact('Menu','setting','gallery'));
        }
    }
}
