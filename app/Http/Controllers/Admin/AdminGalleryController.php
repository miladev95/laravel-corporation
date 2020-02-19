<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminGalleryController extends Controller
{
    public function index(){
        $gallery = Gallery::all();
        return view('admin.gallery',compact('gallery'));
    }
}
