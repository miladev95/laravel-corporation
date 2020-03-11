<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $post = Posts::all();
        return response()->json($post);
    }

    public function comment($id, Request $request)
    {
        $postComment = DB::table("posts_comment")
            ->where('post_id','=',$id)
            ->where('comment_status','>',0)->get();
        return response()->json($postComment);
    }
}
