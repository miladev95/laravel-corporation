<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\AddCommentRequest;
use App\Http\Requests\NewsEmailRequest;
use App\Menu;
use App\News;
use App\NewsComment;
use App\NewsEmail;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;

class SingleNewsController extends Controller
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
            $news = News::whereId($id)->firstOrFail();
            return view('singlenews',compact('news','Menu','setting','gallery','newsComment'));
        }else {
            return view('404',compact('Menu','setting','gallery'));
        }
    }
    public function addComment(AddCommentRequest $request){
        $date = jdate()->getYear() . "/".jdate()->getMonth() . "/" . jdate()->getDay();
        $newsComment = new NewsComment(array(
            'name' => $request->get("name"),
            'email' => $request->get("email"),
            'comment' => $request->get("comment"),
            'news_id' => $request->get("id"),
            'comment_status' => 0,
            'date' => $date,
        ));
        $newsComment->save();
        return redirect(action('SingleNewsController@index',['id'=>$request->id]))->with('status','نظر شما با موفقیت ثبت شد با تشکر');
    }
}
