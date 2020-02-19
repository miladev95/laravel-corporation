<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $setting = Setting::all();
      return view('admin.setting',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $setting = Setting::whereId(1)->firstOrFail();
      $setting->title = $request->get('title');
      $setting->telephone = $request->get('telephone');
      $setting->email = $request->get('email');
      $setting->facebook = $request->get('facebook');
      $setting->instagram = $request->get('instagram');
      $setting->twitter = $request->get('twitter');
      $setting->telegram = $request->get('telegram');
      $setting->linkedin = $request->get('linkedin');
      $setting->address = $request->get('address');
      $setting->phone_number = $request->get('phone_number');
      $setting->fax = $request->get('fax');
      $setting->brief_about = $request->get('brief_about');
      $setting->save();
      return redirect('/home/setting')->with('status','ویرایش با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
