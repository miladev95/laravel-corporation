<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Menu;
use App\Setting;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $gallery = Gallery::all()->take(10);
        $Menu = Menu::all();
        $setting = Setting::all();
        return view('gallery', compact('gallery','Menu','setting'));
    }
}
