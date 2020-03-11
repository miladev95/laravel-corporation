<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EditPostController extends Controller
{
    public function edit($id){
        $post = Posts::whereId($id)->firstOrFail();
        return view('admin.edit-post', compact( 'post'));
    }

    public function update($id,Request $request){
        if ($request->hasFile('image')) {
            $post = Posts::whereId($id)->firstOrFail();
            $image_path = $post->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $image = $request->file('image');
            $name = 'img/post/' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('img/post');
            $image->move($destinationPath, $name);
            $post->title = $request->get('title');
            $post->tags = $request->get('tags');
            $post->content = $request->get('content');
            $post->image = $name;
            $post->save();
        } else {
            $post = Posts::whereId($id)->firstOrFail();
            $image_path = $post->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $post->title = $request->get('title');
            $post->image = '';
            $post->tags = $request->get('tags');
            $post->content = $request->get('content');
            $post->save();
        }
        return redirect('admin/post')->with('status', 'Done successfully');
    }
}
