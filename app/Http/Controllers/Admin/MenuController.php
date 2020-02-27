<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function create(Request $request){

    }

    public function destroy(Request $request){
        if($request->has("id")){
            $menu = Menu::find($request->get("id"));
            $menu->delete();
            return redirect('/admin/menu')->with('status','با موفقیت حذف شد');
        }else {
            return redirect('/admin/menu')->with('status','منوی مورد یافت نشد');
        }
    }

    public function update(Request $request){
        if($request->has("id")){
            dd($request->get("id") . " this is patch");
        }else {
            dd("no id");
        }
    }
}
