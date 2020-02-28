<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddMenuController extends Controller
{
    public function index(){
        $parents = Menu::all()->where('parent','=','0');
        return view('admin.add-menu',compact('parents'));
    }

    public function store(){

    }
}
