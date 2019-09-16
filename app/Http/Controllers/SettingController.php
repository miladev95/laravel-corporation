<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SettingFormRequest;
use App\Setting;
class SettingController extends Controller
{
    public function index(){
      return view('admin.setting');
    }

    public function edit(Request $request){
      $setting = Setting::whereId(1)->firstOrFail();
      print($request->get('title'));

      // $setting->title = $request->get('title');
      // $setting->telephone = $request->get('telephone');
      // $setting->email = $request->get('email');
      // $setting->save();
      // return redirect('SettingController@index')->with('status','ویرایش با موفقیت انجام شد');
    }
}
