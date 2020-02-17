<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Menu;
use App\News;
use App\Posts;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    public function index(Request $request){
        $Menu = Menu::all();
        $setting = Setting::all();
        $gallery = Gallery::all()->take(3);
        if($request->has("tag")){
            $tag = $request->get("tag");
            $postTag = DB::table("posts")
                ->where('tags','like','%'.$tag.'%')->get();
            $newsTag = DB::table("news")
                ->where('tags','like','%'.$tag.'%')->get();
            return view('tags',compact('newsTag','Menu','setting','gallery','postTag'));
        }else {
            return view('404',compact('Menu','setting','gallery'));
        }
    }
}
