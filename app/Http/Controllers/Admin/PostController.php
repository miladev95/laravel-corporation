<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Posts;

class PostController extends Controller
{
    public function index(){
        $post = Posts::all();
        return view('admin.post',compact('post'));
    }
}
