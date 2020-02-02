<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsEmailRequest;
use App\Menu;
use App\NewsEmail;
use App\Notification;
use App\Setting;
use App\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $setting = Setting::all();
        $slider = Slider::all();
        $Menu = Menu::all();
        $notification = Notification::latest('id')->first();
        return view('index', compact('setting', 'Menu', 'slider', 'notification'));
    }

    public function joinNews(NewsEmailRequest $request)
    {
        $newsEmail = new NewsEmail(array(
            'email' => $request->get("email")
        ));
        $newsEmail->save();
        return redirect('/')->with('status', 'ایمیل شما ثبت شد با تشکر');
    }
}
