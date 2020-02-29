<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    public function index(){
        $menu = DB::select("
                SELECT
                    e.id id,
                    e.title title,
                    m.title parent,
                    e.image image,
                    e.link link,
                    e.created_at created_at,
                    e.updated_at updated_at
                FROM
                    menu e
                LEFT JOIN menu m ON m.id = e.parent
        ");
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
