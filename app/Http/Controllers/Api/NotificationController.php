<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Notification;

class NotificationController extends Controller
{
    public function index(){
        $notification = Notification::all();
        return response()->json($notification);
    }
}
