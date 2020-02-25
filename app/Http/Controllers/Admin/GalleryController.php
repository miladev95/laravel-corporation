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

    public function create(){
        return view('admin.new-gallery');
    }

    public function upload(Request $request){
        dd($request->get("title"));
    }
}
