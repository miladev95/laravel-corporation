<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return view('admin.menu',compact('menu'));
    }

    public function create(Request $request){

    }

    public function destroy(Request $request){

    }

    public function update(Request $request){

    }
}
