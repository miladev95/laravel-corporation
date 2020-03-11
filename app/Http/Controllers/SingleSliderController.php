<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Menu;
use App\Setting;
use App\Slider;
use Illuminate\Http\Request;

class SingleSliderController extends Controller
{
    public function index($id, Request $request)
    {
        $Menu = Menu::all();
        $setting = Setting::all();
        $gallery = Gallery::all()->take(3);
        $slider = Slider::whereId($id)->firstOrFail();
        return view('singleslider', compact('slider', 'Menu', 'setting', 'gallery'));
    }
}
