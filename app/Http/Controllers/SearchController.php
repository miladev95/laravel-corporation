<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Menu;
use App\News;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request){
        $maxPagination = 6;
        if($request->has("page"))
            $currentPage = $request->get("page");
        else
            $currentPage = 1;
        $setting = Setting::all();
        $Menu = Menu::all();
        $counter = News::all();

        $totalPages = ceil($counter->count() / $maxPagination);
        $news = DB::table('news')
            ->where('title','like','%'.$request->get('search').'%')
            ->skip(($currentPage*$maxPagination)-$maxPagination)->take($maxPagination)->get();
        $posts = DB::table('posts')
            ->where('title','like','%'.$request->get('search').'%')
            ->skip(($currentPage*$maxPagination)-$maxPagination)->take($maxPagination)->get();
        $gallery = Gallery::all()->take(3);
        return view('search',compact('gallery','posts','setting','Menu','news','totalPages','currentPage'));
    }
}
