<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has("id")) {
            DB::table('gallery')->delete($request->get("id"));
            $gallery = Gallery::all();
            $message = 'عکس مورد نظر با موفقیت حذف شد';
            return view('admin.gallery', compact('gallery', 'message'));
        } else {
            $gallery = Gallery::all();
            return view('admin.gallery', compact('gallery'));
        }
    }

    public function create()
    {
        return view('admin.new-gallery');
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = 'img/gallery/'.time() . '.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img/gallery');
            $image->move($destinationPath,$name);
            $galleryObject = new Gallery(array(
                'image'=>$name,
                'title'=>$request->get('title'),
            ));
            $galleryObject->save();
            return redirect('/admin/newgallery')->with('status','با موفقیت انجام شد');
        }
        return view('admin.new-gallery');
    }
}
