<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostCommentController extends Controller
{
    public function index()
    {
        $postComment = DB::table('posts_comment')
            ->select('posts_comment.*', 'posts.title as post_title')
            ->join('posts', 'posts.id', '=', 'posts_comment.post_id')
            ->get();
        return view('admin.post-comment', compact('postComment'));
    }

    public function destroy($id, Request $request)
    {

    }

    public function confirmComment($id, Request $request)
    {

    }
}
