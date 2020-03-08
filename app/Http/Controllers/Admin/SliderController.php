<?php

namespace App\Http\Controllers\Admin;

use App\Notification;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider', compact('slider'));
    }

    public function destroy($id, Request $request)
    {
        $slider = Slider::find($id);
        $image_path = $slider->image;
        $slider->delete();
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        return redirect('/admin/slider')->with('status', 'با موفقیت حذف شد');
    }
}
