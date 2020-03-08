<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'XCorporation Admin Panel') }}</title>


    <!-- Main Theme -->
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->


    <!-- Admin Panel Links -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">


    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <link href="assets/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('js/modernizr.min.js') }}"></script>

    @yield('custom_head')

</head>
<body class="fixed-left">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'xCorporation') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('ورود') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('خروج از حساب کاربری') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

          <!-- Begin page -->
          <div id="wrapper">
                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <!-- LOGO -->
                        <div class="topbar-left">
                            <a href="index.html" class="logo"><span>xAdmin</span><i class="zmdi zmdi-layers"></i></a>
                        </div>

                        <!-- Button mobile view to collapse sidebar menu -->
                        <div class="navbar navbar-default" role="navigation">
                            <div class="container">

                                <!-- Page title -->
                                <ul class="nav navbar-nav navbar-left">
                                    <li>
                                        <button class="button-menu-mobile open-left">
                                            <i class="zmdi zmdi-menu"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <h4 class="page-title">داشبورد</h4>
                                    </li>
                                </ul>

                                <!-- Right(Notification and Searchbox -->
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <!-- Notification -->
                                        <div class="notification-box">
                                            <ul class="list-inline m-b-0">
                                                <li>
                                                    <a href="javascript:void(0);" class="right-bar-toggle">
                                                        <i class="zmdi zmdi-notifications-none"></i>
                                                    </a>
                                                    <div class="noti-dot">
                                                        <span class="dot"></span>
                                                        <span class="pulse"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Notification bar -->
                                    </li>
                                    <li class="hidden-xs">
                                        <form role="search" class="app-search">
                                            <input type="text" placeholder="به دنبال چه می گردی ؟؟؟"
                                                   class="form-control">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </form>
                                    </li>
                                </ul>

                            </div><!-- end container -->
                        </div><!-- end navbar -->
                    </div>
                    <!-- Top Bar End -->

                    <!-- ========== Left Sidebar Start ========== -->
                    <div class="left side-menu">
                        <div class="sidebar-inner slimscrollleft">

                            <!-- User -->
                            <div class="user-box">
                                <div class="user-img">
                                    <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                                    <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                                </div>
                                <h5><a href="#">علی یدالهی</a> </h5>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" >
                                            <i class="zmdi zmdi-settings"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="text-custom"  href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <i class="zmdi zmdi-power"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End User -->

                            <!--- Sidemenu -->
                            <div id="sidebar-menu">
                                <ul>
                                  <li class="text-muted menu-title">دسته بندی ها</li>

                                    <li>
                                        <a href="{!! action('Admin\HomeController@index') !!}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> داشبورد </span> </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> گالری </span> <span class="menu-arrow"></span></a>
                                        <ul class="list-unstyled">
                                            <li><a href="{!! action('Admin\GalleryController@index') !!}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> مشاهده عکس ها </span> </a></li>
                                            <li><a href="{!! action('Admin\GalleryController@create') !!}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> افزودن عکس </span> </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{!! action('Admin\MenuController@index') !!}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> منو </span> </a>
                                    </li>
                                    <li>
                                        <a href="{!! action('Admin\NewsController@index') !!}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> اخبار </span> </a>
                                    </li>
                                    <li>
                                        <a href="{!! action('Admin\NewsCommentController@index') !!}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> کامنت های اخبار </span> </a>
                                    </li>
                                    <li>
                                        <a href="{!! action('Admin\NewsLetterController@index') !!}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> اعضای خبرنامه </span> </a>
                                    </li>
                                    <li>
                                        <a href="{!! action('Admin\NotificationController@index') !!}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> اعلان ها </span> </a>
                                    </li>
                                    <li>
                                        <a href="{!! action('Admin\PostController@index') !!}" class="waves-effect"><i class="zmdi zmdi-settings"></i><span>پست ها</span></a>
                                    </li>
                                    <li>
                                        <a href="{!! action('Admin\PostCommentController@index') !!}" class="waves-effect"><i class="zmdi zmdi-settings"></i><span>کامنت های پست ها</span></a>
                                    </li>
                                    <li>
                                        <a href="{!! action('Admin\SliderController@index') !!}" class="waves-effect"><i class="zmdi zmdi-settings"></i><span>اسلایدر</span></a>
                                    </li>
                                    <li>
                                        <a href="{!! action('Admin\SettingController@index') !!}" class="waves-effect"><i class="zmdi zmdi-settings"></i><span>تنظیمات عمومی</span></a>
                                    </li>

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <!-- Sidebar -->
                            <div class="clearfix"></div>

                        </div>

                    </div>
                    <!-- Left Sidebar End -->


          </div>
          <!-- END wrapper -->
          @foreach ($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }}</p>
          @endforeach
          @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
          @endif
            @yield('content')
        </main>
    </div>
    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-rtl.min.js') }}"></script>
    <script src="{{ asset('js/detect.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <script src="{{ asset('js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>

    <!-- KNOB JS -->
    <!--[if IE]>
    <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
    <![endif]-->

    <script src="{{ asset('plugins/jquery-knob/jquery.knob.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael-min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('pages/jquery.dashboard.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/jquery.core.js') }}"></script>
    <script src="{{ asset('js/jquery.app.js') }}"></script>

    @yield('custom_scripts')


</body>
</html>
