<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\NewsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsCommentController extends Controller
{
    public function index()
    {
        $newsComment = DB::table('news_comment')
            ->select('news_comment.*', 'news.title as news_title')
            ->join('news', 'news.id', '=', 'news_comment.news_id')
            ->get();
        //SELECT news_comment.*, news.title as news_title FROM news_comment JOIN news ON news_comment.news_id = news.id
        return view('admin.news-comment', compact('newsComment'));
    }

    public function destroy($id, Request $request)
    {
        $newsComment = NewsComment::find($id);
        $newsComment->delete();
        return redirect('/admin/news/comment')->with('status', 'Successfully deleted');
    }

    public function confirmComment($id, Request $request)
    {
        $newsComment = NewsComment::whereId($id)->firstOrFail();
        $newsComment->comment_status = 1;
        $newsComment->save();
        return redirect('/admin/news/comment')->with('status', 'Successfully approved');
    }
}
