<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index(){
        $post = Posts::all();
        return view('admin.post',compact('post'));
    }

    public function destroy(Request $request){
        if($request->has("id")){
            $post = Posts::find($request->get("id"));
            $image_path = $post->image;
            $post->delete();
            if(File::exists($image_path)){
                File::delete($image_path);
            }
            return redirect('/admin/post')->with('status','با موفقیت حذف شد');
        }else {
            return redirect('/admin/post')->with('status','منوی مورد یافت نشد');
        }
    }
}
