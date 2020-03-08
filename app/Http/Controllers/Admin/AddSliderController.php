<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;

class AddSliderController extends Controller
{
    public function index()
    {
        return view('admin.add-slider');
    }

    public function store(Request $request)
    {
        $slider = new Slider(array(
            'title'=>$request->get('title'),
            'brief'=>$request->get('brief'),
            'description'=>$request->get('description'),
        ));
        $slider->save();
        return redirect('/admin/slider')->with('status','با موفقیت ذخیره شد');
    }
}
