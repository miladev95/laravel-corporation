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

class NewsListController extends Controller
{
    public function index(){

        $setting = Setting::all();
        $Menu = Menu::all();
        $news = News::all()->take(6);
        $gallery = Gallery::all()->take(3);
        return view('newslist',compact('gallery','setting','Menu','news'));
    }
}
