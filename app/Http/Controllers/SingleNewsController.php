<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Menu;
use App\News;
use App\Setting;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Table;

class SingleNewsController extends Controller
{
    public function index(Request $request){
        $Menu = Menu::all();
        $setting = Setting::all();
        $gallery = Gallery::all()->take(3);
        if($request->has("id")){
            $id = $request->get("id");
            $news = News::whereId($id)->firstOrFail();
            return view('singlenews',compact('news','Menu','setting','gallery'));
        }else {
            return view('404',compact('Menu','setting','gallery'));
        }
    }
}
