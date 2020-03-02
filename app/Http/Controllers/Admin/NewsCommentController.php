<?php

namespace App\Http\Controllers\Admin;

use App\NewsComment;
use App\PostsComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsCommentController extends Controller
{
    public function index()
    {
        $postComment = NewsComment::all();
        return view('admin.news-comment',compact('postComment'));
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
