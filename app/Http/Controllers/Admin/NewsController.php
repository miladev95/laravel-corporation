<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return view('admin.news',compact('news'));
    }

    public function destroy(Request $request){
        if($request->has("id")){
            $news = News::find($request->get("id"));
            $image_path = $news->image;
            $news->delete();
            if(File::exists($image_path)){
                File::delete($image_path);
            }
            return redirect('/admin/news')->with('status','Successfully deleted');
        }else {
            return redirect('/admin/news')->with('status','Not Found');
        }
    }
}
