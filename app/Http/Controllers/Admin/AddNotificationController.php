<?php

namespace App\Http\Controllers\Admin;

use App\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddNotificationController extends Controller
{
    public function index()
    {
        return view('admin.add-notification');
    }

    public function store(Request $request)
    {
        $notification = new Notification(array(
            'title'=>$request->get('title'),
            'brief'=>$request->get('brief'),
            'description'=>$request->get('description'),
        ));
        $notification->save();
        return redirect('/admin/notification')->with('status','با موفقیت ذخیره شد');
    }
}
