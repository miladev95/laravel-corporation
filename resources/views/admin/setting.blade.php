@extends('layouts.admin')

@section('content')



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
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

                                          			<h4 class="header-title m-t-0 m-b-30">انواع ورودی</h4>

                                          			<div class="row">
                                          				<div class="col-lg-6">
                                          					<form class="form-horizontal" role="form" method="post">
                                                      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                  	                                            <div class="form-group">
                  	                                                <label class="col-md-2 control-label" for="example-email">عنوان سایت</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" id="title" class="form-control" placeholder="شرکت xCo">
                  	                                                </div>
                  	                                            </div>
                  	                                            <div class="form-group">
                  	                                                <label class="col-md-2 control-label">تلفن</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" id="telephone"class="form-control" placeholder="...۰۲۱">
                  	                                                </div>
                  	                                            </div>

                  	                                            <div class="form-group">
                  	                                                <label class="col-md-2 control-label">ایمیل</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="email" id="email" class="form-control" placeholder="...@info">
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


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">اعلانات</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="images/users/avatar-2.jpg/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">کاربر شماره یک</span>
                                    <span class="desc">متن کاربر شماره یک</span>
                                    <span class="time">2 ساعت قبل</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">ثبت نام جدید</span>
                                    <span class="desc">کاربری جدید در سایت ثبت نام کرده است</span>
                                    <span class="time">5 ساعت قبل</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">پیام جدید</span>
                                    <span class="desc">متن پیام جدید از کاریی جدید</span>
                                    <span class="time">1 روز قبل</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="{{ asset('images/users/avatar-3.jpg') }}" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">کاربر شماره 2</span>
                                    <span class="desc">با سلام من یک متن کاملا آزمایشی هستم</span>
                                    <span class="time">2 روز قبل</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">تنظیمات</span>
                                    <span class="desc">تنظیمات جدید برای دسترسی و راحتی شما موجود است</span>
                                    <span class="time">1 روز قبل</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->


@endsection
