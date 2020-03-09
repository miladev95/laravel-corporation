<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return response()->json($news);
    }
}
