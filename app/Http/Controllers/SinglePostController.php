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
            $postComment = DB::table("posts_comment")
                ->where('post_id','=',$id)
                ->where('comment_status','>',0)->get();
            $post = News::whereId($id)->firstOrFail();
            return view('singlenews',compact('post','Menu','setting','gallery','postComment'));
        }else {
            return view('404',compact('Menu','setting','gallery'));
        }
    }
}
