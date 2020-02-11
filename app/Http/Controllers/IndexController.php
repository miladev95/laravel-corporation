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

    public function joinNews(Request $request)
    {
        $alertStyle = 'alert-success';
        try {
            $newsEmail = new NewsEmail(array(
                'email' => $request->get("email")
            ));
            $newsEmail->save();
            $message = 'ایمیل شما ثبت شد با تشکر';
            return redirect('/')->with(['message'=>$message, 'alert-style'=>$alertStyle]);
        }catch (\Exception $e){
            $alertStyle = 'alert-danger';
            if($e->errorInfo[1] == 1062){
                $message = 'این ایمیل قبلا ثبت شده است لطفا یک ایمیل دیگر وارد کنید';
                return redirect('/')->with(['message'=>$message, 'alert-style'=>$alertStyle]);
            }else {
                $message = 'مشکلی پیش آمده لطفا بعدا تلاش نمایید';
                return redirect('/')->with(['message'=>$message, 'alert-style'=>$alertStyle]);
            }
        }
    }
}
