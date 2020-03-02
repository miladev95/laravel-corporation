<?php

namespace App\Http\Controllers\Admin;

use App\NewsComment;
use App\PostsComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NewsCommentController extends Controller
{
    public function index()
    {
        $postComment = DB::table('news_comment')
            ->select('news_comment.*','news.title as news_title')
            ->join('news','news.id','=','news_comment.news_id')
            ->get();
        //SELECT news_comment.*, news.title as news_title FROM news_comment JOIN news ON news_comment.news_id = news.id
        return view('admin.news-comment', compact('postComment'));
    }

    public function destroy($id, Request $request)
    {
        dd($id);
    }

    public function publishComment($id, Request $request)
    {
        dd($id);
    }
}
