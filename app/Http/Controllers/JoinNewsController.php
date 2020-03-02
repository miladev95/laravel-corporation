<?php

namespace App\Http\Controllers;

use App\NewsLetter;
use Illuminate\Http\Request;

class JoinNewsController extends Controller
{
    public function create(Request $request){
        $alertStyle = 'alert-success';
        try {
            $newsLetter = new NewsLetter(array(
                'email' => $request->get("email")
            ));
            $newsLetter->save();
            $message = 'ایمیل شما ثبت شد با تشکر';
            return redirect('/')->with(['message'=>$message, 'alert-style'=>$alertStyle]);
        }catch (\Exception $e){
            $alertStyle = 'alert-danger';
            if($e->getCode() == 23000){
                $message = 'این ایمیل قبلا ثبت شده است لطفا یک ایمیل دیگر وارد کنید';
                return redirect('/')->with(['message'=>$message, 'alert-style'=>$alertStyle]);
            }else {
                $message = 'مشکلی پیش آمده لطفا بعدا تلاش نمایید';
                //$message = $e->getMessage();
                return redirect('/')->with(['message'=>$message, 'alert-style'=>$alertStyle]);
            }
        }
    }
}
