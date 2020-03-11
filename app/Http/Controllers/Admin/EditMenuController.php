<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class EditMenuController extends Controller
{

    public function edit($id)
    {
        $menu = Menu::whereId($id)->firstOrFail();
        $parents = Menu::all()->where('parent', '=', '0');
        return view('admin.edit-menu', compact('parents', 'menu'));
    }

    public function update($id, Request $request)
    {
        if ($request->hasFile('image')) {
            $menu = Menu::whereId($id)->firstOrFail();
            $image_path = $menu->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $image = $request->file('image');
            $name = 'img/menu/' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('img/menu');
            $image->move($destinationPath, $name);
            $menu->title = $request->get('title');
            $menu->parent = $request->get('parent');
            $menu->link = $request->get('link');
            $menu->image = $name;
            $menu->save();
        } else {
            $menu = Menu::whereId($id)->firstOrFail();
            $image_path = $menu->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $menu->title = $request->get('title');
            $menu->image = '';
            $menu->parent = $request->get('parent');
            $menu->link = $request->get('link');
            $menu->save();
        }
        return redirect('admin/menu')->with('status', 'Done successfully');
    }
}
