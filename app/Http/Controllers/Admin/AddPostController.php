<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Posts;
use Illuminate\Http\Request;

class AddPostController extends Controller
{
    public function index()
    {
        return view('admin.add-post');
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
            $name = 'img/post/'.time() . '.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img/post');
            $image->move($destinationPath,$name);
            $postObject = new Posts(array(
                'title'=>$request->get('title'),
                'image'=>$name,
                'date'=>$date,
                'tags'=>$request->get('tags'),
                'content'=>$request->get('content'),
            ));
            $postObject->save();
            return redirect('/admin/post')->with('status','Done successfully');
        } else {
            $postObject = new Posts(array(
                'title'=>$request->get('title'),
                'image'=>'',
                'date'=>$date,
                'tags'=>$request->get('tags'),
                'content'=>$request->get('content'),
            ));
            $postObject->save();
            return redirect('/admin/post')->with('status','Done successfully');
        }
    }
}
