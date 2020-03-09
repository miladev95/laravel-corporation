<?php

namespace App\Http\Controllers\Api;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $gallery = Gallery::all();
        return response()->json($gallery);
    }
}
