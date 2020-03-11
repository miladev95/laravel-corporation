<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Posts;

class PostController extends Controller
{
    public function index(){
        $post = Posts::all();
        return response()->json($post);
    }
}
