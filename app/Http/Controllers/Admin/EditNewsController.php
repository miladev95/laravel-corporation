<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EditNewsController extends Controller
{
    public function edit($id){
        $news = News::whereId($id)->firstOrFail();
        return view('admin.edit-news', compact( 'news'));
    }

    public function update($id,Request $request){
        if ($request->hasFile('image')) {
            $news = News::whereId($id)->firstOrFail();
            $image_path = $news->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $image = $request->file('image');
            $name = 'img/news/' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('img/news');
            $image->move($destinationPath, $name);
            $news->title = $request->get('title');
            $news->tags = $request->get('tags');
            $news->content = $request->get('content');
            $news->image = $name;
            $news->save();
        } else {
            $news = News::whereId($id)->firstOrFail();
            $image_path = $news->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $news->title = $request->get('title');
            $news->image = '';
            $news->tags = $request->get('tags');
            $news->content = $request->get('content');
            $news->save();
        }
        return redirect('admin/news')->with('status', 'Done successfully');
    }
}
