@extends('layouts.admin')

@section('content')
            
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                  <div class="row">
                                          	<div class="col-sm-12">
                                          		<div class="card-box">

                                                      <div class="dropdown pull-right">
                                                          <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                                              <i class="zmdi zmdi-more-vert"></i>
                                                          </a>
                                                          <ul class="dropdown-menu" role="menu">
                                                              <li><a href="#">متن اول</a></li>
                                                              <li><a href="#">متن دوم</a></li>
                                                              <li><a href="#">متن سوم</a></li>
                                                              <li class="divider"></li>
                                                              <li><a href="#">متن پاورقی</a></li>
                                                          </ul>
                                                      </div>

                                          			<h4 class="header-title m-t-0 m-b-30">تنظیمات عمومی</h4>

                                          			<div class="row">
                                          				<div class="col-lg-6">
                                          					<form class="form-horizontal" role="form" method="post">
                                                               <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                                @if(session('status'))
                                                                <label class="col-md-2 control-label" for="example-email">{{ session('status') }}</label>
                                                                @endif
                  	                                            <div class="form-group">
                  	                                                <label class="col-md-2 control-label" for="example-email">عنوان سایت</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" id="title" class="form-control" placeholder="شرکت xCo" value="{!! $setting[0]['title'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  
                  	                                            <div class="form-group">
                  	                                                <label class="col-md-2 control-label">تلفن</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="number" id="telephone"class="form-control" placeholder="...۰۲۱" value="{!! $setting[0]['telephone'] !!}">
                  	                                                </div>
                  	                                            </div>

                  	                                            <div class="form-group">
                  	                                                <label class="col-md-2 control-label">ایمیل</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="email" id="email" class="form-control" placeholder="milad@gmail.com" value="{!! $setting[0]['email'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">فیسبوک</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" id="email" class="form-control" placeholder="facebook.com/milad" value="{!! $setting[0]['facebook'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">اینستاگرام</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" id="email" class="form-control" placeholder="instagram.com/milad" value="{!! $setting[0]['instagram'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">توییتر</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" id="email" class="form-control" placeholder="twitter.com/milad" value="{!! $setting[0]['twitter'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">تلگرام</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" id="email" class="form-control" placeholder="t.me/milad" value="{!! $setting[0]['telegram'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">لینکدین</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" id="email" class="form-control" placeholder="linkedin.com/milad" value="{!! $setting[0]['linkedin'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">آدرس</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" id="email" class="form-control" placeholder="تهران ، خیابان امام..." value="{!! $setting[0]['address'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">شماره همراه</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="number" id="email" class="form-control" placeholder="0912...." value="{!! $setting[0]['phone_number'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">فکس</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" id="email" class="form-control" placeholder="" value="{!! $setting[0]['fax'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">توضیحات مختصر</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" id="email" class="form-control" placeholder="" value="{!! $setting[0]['brief_about'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  
                                                        <button type="submit" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">ثبت تغییرات</button>
                  	                               </form>
                                          				</div><!-- end col -->
                                          			</div><!-- end row -->
                                          		</div>

                </div> <!-- content -->

                <footer class="footer">
                     © xAdmin 2019
                </footer>

            </div>


@endsection
