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
            $message = 'Your Email Has Been Registered Thanks';
            return redirect('/')->with(['message'=>$message, 'alert-style'=>$alertStyle]);
        }catch (\Exception $e){
            $alertStyle = 'alert-danger';
            if($e->getCode() == 23000){
                $message = 'This email is already registered Please enter another email';
                return redirect('/')->with(['message'=>$message, 'alert-style'=>$alertStyle]);
            }else {
                $message = 'Something went wrong please try again later';
                //$message = $e->getMessage();
                return redirect('/')->with(['message'=>$message, 'alert-style'=>$alertStyle]);
            }
        }
    }
}
