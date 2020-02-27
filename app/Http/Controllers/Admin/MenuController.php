<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
            dd($request->get("id") . " this is destroy");
        }else {
            dd("no id");
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
