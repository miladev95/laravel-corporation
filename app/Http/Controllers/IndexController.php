<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\NewsEmailRequest;
use App\Menu;
use App\News;
use App\NewsEmail;
use App\Notification;
use App\Posts;
use App\Setting;
use App\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $setting = Setting::all();
        $slider = Slider::all()->take(3);
        $Menu = Menu::all();
        $news = News::all()->take(3);
        $post = Posts::all()->take(1)->first();
        $notification = Notification::latest('id')->first();
        $gallery = Gallery::all()->take(3);
        return view('index', compact('setting', 'Menu', 'slider',
            'notification', 'news', 'post', 'gallery'));
    }
}
