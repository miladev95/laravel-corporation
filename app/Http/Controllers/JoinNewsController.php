<?php

namespace App\Http\Controllers;

use App\NewsEmail;
use Illuminate\Http\Request;

class JoinNewsController extends Controller
{
    public function create(Request $request){
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
