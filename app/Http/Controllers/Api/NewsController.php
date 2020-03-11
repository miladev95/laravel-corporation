<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return response()->json($news);
    }

    public function comment($id, Request $request)
    {
        $newsComment = DB::table("news_comment")
            ->where('news_id','=',$id)
            ->where('comment_status','>',0)->get();
        return response()->json($newsComment);
    }
}
