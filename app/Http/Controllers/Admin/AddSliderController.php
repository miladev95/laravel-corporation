<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
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
        if($request->hasFile('image')){
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $image = $request->file('image');
            $name = 'img/slider/'.time() . '.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img/slider');
            $image->move($destinationPath,$name);
            $sliderObject = new Slider(array(
                'title'=>$request->get('title'),
                'image'=>$name,
                'brief'=>$request->get('brief'),
                'description'=>$request->get('description'),
            ));
            $sliderObject->save();
            return redirect('/admin/slider')->with('status','Done successfully');
        } else {
            $sliderObject = new Slider(array(
                'title'=>$request->get('title'),
                'image'=>'',
                'brief'=>$request->get('brief'),
                'description'=>$request->get('description'),
            ));
            $sliderObject->save();
            return redirect('/admin/slider')->with('status','Done successfully');
        }
    }
}
