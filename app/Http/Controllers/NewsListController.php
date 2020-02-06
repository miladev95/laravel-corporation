<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Menu;
use App\News;
use App\Notification;
use App\Posts;
use App\Setting;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsListController extends Controller
{
    public function index(Request $request){
        $maxPagination = 6;
        if($request->has("page"))
            $currentPage = $request->get("page");
        else
            $currentPage = 1;
        $setting = Setting::all();
        $Menu = Menu::all();
        $counter = News::all();
        $totalPages = ceil($counter->count() / $maxPagination);
        $news = DB::table('news')->skip(($currentPage*$maxPagination)-$maxPagination)->take($maxPagination)->get();
        $gallery = Gallery::all()->take(3);
        return view('newslist',compact('gallery','setting','Menu','news','totalPages','currentPage'));
    }
}
