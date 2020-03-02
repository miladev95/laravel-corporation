<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\NewsComment;
use App\PostsComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NewsCommentController extends Controller
{
    public function index()
    {
        $postComment = DB::table('news_comment')
            ->select('news_comment.*', 'news.title as news_title')
            ->join('news', 'news.id', '=', 'news_comment.news_id')
            ->get();
        //SELECT news_comment.*, news.title as news_title FROM news_comment JOIN news ON news_comment.news_id = news.id
        return view('admin.news-comment', compact('postComment'));
    }

    public function destroy($id, Request $request)
    {
        $newsComment = NewsComment::find($id);
        $newsComment->delete();
        return redirect('/admin/news/comment')->with('status', 'با موفقیت حذف شد');
    }

    public function confirmComment($id, Request $request)
    {
        $newsComment = NewsComment::whereId($id)->firstOrFail();
        $newsComment->comment_status = 1;
        $newsComment->save();
        return redirect('/admin/news/comment')->with('status', 'با موفقیت تایید شد');
    }
}
