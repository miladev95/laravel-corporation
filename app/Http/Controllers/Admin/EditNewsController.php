<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditNewsController extends Controller
{
    public function edit($id,Request $request){
        dd($id);
    }
}
