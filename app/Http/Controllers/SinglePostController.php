<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\AddCommentRequest;
use App\Menu;
use App\News;
use App\NewsComment;
use App\PostsComment;
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

    public function addComment(AddCommentRequest $request){
        $date = jdate()->getYear() . "-".jdate()->getMonth() . "-" . jdate()->getDay();
        $postComment = new PostsComment(array(
            'name' => $request->get("name"),
            'email' => $request->get("email"),
            'comment' => $request->get("comment"),
            'post_id' => $request->get("id"),
            'comment_status' => 0,
            'date' => $date,
        ));
        $postComment->save();
        return redirect(action('SinglePostController@index',['id'=>$request->id]))->with('status','نظر شما با موفقیت ثبت شد با تشکر');
    }

}
