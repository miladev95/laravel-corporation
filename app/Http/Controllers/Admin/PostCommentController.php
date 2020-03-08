<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PostsComment;
use Illuminate\Http\Request;
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
        $postComment = PostsComment::find($id);
        $postComment->delete();
        return redirect('/admin/post/comment')->with('status', 'با موفقیت حذف شد');
    }

    public function confirmComment($id, Request $request)
    {
        $postComment = PostsComment::whereId($id)->firstOrFail();
        $postComment->comment_status = 1;
        $postComment->save();
        return redirect('/admin/post/comment')->with('status', 'با موفقیت تایید شد');
    }
}
