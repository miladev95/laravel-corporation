<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SettingFormRequest;
use App\Setting;
class SettingController extends Controller
{
    public function index(){
      $setting = Setting::all();
      return view('admin.setting',compact('setting'));
    }

    public function edit(SettingFormRequest $request){
      $setting = Setting::whereId(1)->firstOrFail();
      return redirect('/home/setting')->with('status',$request->get('title'));
      // $setting->title = $request->get('title');
      // $setting->telephone = $request->get('telephone');
      // $setting->email = $request->get('email');
      // $setting->save();
      // return redirect('SettingController@index')->with('status','ویرایش با موفقیت انجام شد');
    }
}
