<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddNewsController extends Controller
{
    public function index()
    {
        return view('admin.add-news');
    }

    public function store(Request $request)
    {
//        $tmp = $request->get('content');
//        $tmp = str_replace('<div>','',$tmp);
//        $tmp = str_replace('</div>','',$tmp);
        $date = jdate()->getYear() . "/".jdate()->getMonth() . "/" . jdate()->getDay();
        if($request->hasFile('image')){
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $image = $request->file('image');
            $name = 'img/news/'.time() . '.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img/news');
            $image->move($destinationPath,$name);
            $newsObject = new News(array(
                'title'=>$request->get('title'),
                'image'=>$name,
                'date'=>$date,
                'tags'=>$request->get('tags'),
                'content'=>$request->get('content'),
            ));
            $newsObject->save();
            return redirect('/admin/news')->with('status','Done successfully');
        } else {
            $newsObject = new News(array(
                'title'=>$request->get('title'),
                'image'=>'',
                'date'=>$date,
                'tags'=>$request->get('tags'),
                'content'=>$request->get('content'),
            ));
            $newsObject->save();
            return redirect('/admin/news')->with('status','Done successfully');
        }
    }
}
