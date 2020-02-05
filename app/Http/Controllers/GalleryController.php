<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Menu;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index(Request $request){
        $maxPagination = 9;
        if($request->has("page"))
            $currentPage = $request->get("page");
        else
            $currentPage = 1;
        $gallery = DB::table('gallery')->skip(($currentPage*$maxPagination)-$maxPagination)->take($maxPagination)->get();
        $counter = Gallery::all();
        $totalPages = ceil($counter->count() / $maxPagination);
        $Menu = Menu::all();
        $setting = Setting::all();
        return view('gallery', compact('gallery','Menu','setting','totalPages','currentPage'));
    }
}
