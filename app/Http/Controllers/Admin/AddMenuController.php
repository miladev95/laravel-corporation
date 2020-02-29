<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddMenuRequest;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddMenuController extends Controller
{
    public function index(){
        $parents = Menu::all()->where('parent','=','0');
        return view('admin.add-menu',compact('parents'));
    }

    public function store(Request $request){
        if($request->hasFile('image')){
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $image = $request->file('image');
            $name = 'img/menu/'.time() . '.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img/menu');
            $image->move($destinationPath,$name);
            $menuObject = new Menu(array(
                'title'=>$request->get('title'),
                'image'=>$name,
                'parent'=>$request->get('parent'),
                'link'=>$request->get('link'),
            ));
            $menuObject->save();
            return redirect('/admin/menu')->with('status','با موفقیت ثبت شد');
        } else {
            $menuObject = new Menu(array(
                'title'=>$request->get('title'),
                'image'=>'',
                'parent'=>$request->get('parent'),
                'link'=>$request->get('link'),
            ));
            $menuObject->save();
            return redirect('/admin/menu/add')->with('status','با موفقیت ثبت شد');
        }
    }
}
