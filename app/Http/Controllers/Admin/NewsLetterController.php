<?php

namespace App\Http\Controllers\Admin;

use App\NewsComment;
use App\NewsLetter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsLetterController extends Controller
{
    public function index(){
        $newsLetter = NewsLetter::all();
        return view('admin.news-letter',compact('newsLetter'));
    }

    public function destroy($id,Request $request){
        $newsLetter = NewsLetter::find($id);
        $newsLetter->delete();
        return redirect('/admin/newsletter')->with('status', 'Successfully deleted');
    }
}
