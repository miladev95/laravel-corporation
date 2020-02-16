<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Menu;
use App\News;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinglePostController extends Controller
{
    public function index(Request $request){
        $Menu = Menu::all();
        $setting = Setting::all();
        $gallery = Gallery::all()->take(3);
        if($request->has("id")){
            $id = $request->get("id");
            $newsComment = DB::table("news_comment")
                ->where('news_id','=',$id)
                ->where('comment_status','>',0)->get();
            $post = News::whereId($id)->firstOrFail();
            return view('singlenews',compact('news','Menu','setting','gallery','newsComment'));
        }else {
            return view('404',compact('Menu','setting','gallery'));
        }
    }
}
