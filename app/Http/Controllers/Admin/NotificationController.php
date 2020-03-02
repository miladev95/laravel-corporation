<?php

namespace App\Http\Controllers\Admin;

use App\NewsLetter;
use App\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function index()
    {
        $notification = Notification::all();
        return view('admin.notifcation', compact('notification'));
    }

    public function destroy($id, Request $request)
    {
        $notification = Notification::find($id);
        $notification->delete();
        return redirect('/admin/notification')->with('status', 'با موفقیت حذف شد');
    }
}
