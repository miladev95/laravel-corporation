<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    public function index(){
//        $data = DB::table('menu')
//            ->join('menu','menu.id','=','menu.parent')
//            ->get();
//        dd($data);
        $menu = Menu::all();
        return view('admin.menu',compact('menu'));
    }

    public function destroy(Request $request){
        if($request->has("id")){
            $menu = Menu::find($request->get("id"));
            $image_path = $menu->image;
            $menu->delete();
            if(File::exists($image_path)){
                File::delete($image_path);
            }
            return redirect('/admin/menu')->with('status','با موفقیت حذف شد');
        }else {
            return redirect('/admin/menu')->with('status','منوی مورد یافت نشد');
        }
    }

    public function update(Request $request){
        $parents = Menu::all()->where('parent','=','0');
        dd($parents);
        if($request->has("id")){
            dd($request->get("id") . " this is patch");
        }else {
            dd("no id");
        }
    }
}
