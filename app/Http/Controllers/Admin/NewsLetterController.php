<?php

namespace App\Http\Controllers\Admin;

use App\NewsLetter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsLetterController extends Controller
{
    public function index(){
        $newsLetter = NewsLetter::all();
        
    }
}
