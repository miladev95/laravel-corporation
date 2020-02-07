@extends('layouts.main')

@section('content')
    <nav class="navbar navbar-default main-navigation qt-box-shadow">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="mobile-menu-text">MENU</span>
                    <span class="mobile-menu-bars">
          <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </span>
                </button>
            </div>



            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    @foreach ($Menu as $menu)
                        <?php  $hasChild = false ;?>
                        @foreach ($Menu as $child)
                            @if($menu->id == $child->parent)
                                <?php $hasChild = true; ?>
                            @endif
                        @endforeach
                        @if($menu-> parent == 0)
                            <li class="dropdown">
                                @if($hasChild)
                                    <a href="{!! $menu->link !!}" class="dropdown-toggle" data-toggle="dropdown">{!! $menu->title !!}<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        @foreach ($Menu as $child)
                                            @if($menu->id == $child->parent)
                                                <li class=""><a href="{!! $child->link !!}">{!! $child->title !!}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @else
                                    <a href="{!! $menu->link !!}" class="dropdown-toggle" data-toggle="dropdown">{!! $menu->title !!}</a>
                                @endif
                            </li>
                        @endif
                    @endforeach

                </ul>

            </div>

        </div>
    </nav>



<!-- =========================================================================================== -->
<!-- =================== Begin page content ==================================================== -->
<!-- =========================================================================================== -->

<section class="qt-page-wrapper">
  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="qt-page-header">
          <h2>٤٠٤ <small> - صفحه مورد نظروجود ندارد</small></h2>
          <ol class="breadcrumb">
	    <li class="active">صفحه 404</li>
            <li><a href="{{action("IndexController@index")}}">صفحه اصلی</a></li>

          </ol>
        </div>

        <div class="qt-page-body">

<!-- =========================================================================================== -->
<!-- =========================== 404 =========================================================== -->
<!-- =========================================================================================== -->

          <div class="row">

            <div class="col-sm-2">
              <p class="text-center text-danger"><i class="fa fa-bug fa-5x icon-404"></i></p>
            </div>

            <div class="col-sm-8">
              <div class="well well-lg">
                <p class="lead">صفحه مورد نظر شما یافت نشد</p>
                <p>مجددا تلاش کنید یا به صفحه اصلی بازگردید</p>
                <p><br><a href="{{action("IndexController@index")}}" class="btn btn-primary btn-lg"><i class="fa fa-home"></i> &nbsp; صفحه اصلی</a></p>
              </div>
            </div>

          </div>

<!-- =========================================================================================== -->
<!-- =========================================================================================== -->
<!-- =========================================================================================== -->

        </div>

      </div>

    </div>

  </div>
</section>


<!-- =========================================================================================== -->
<!-- =========================== Recent Photo Galleries ======================================== -->
<!-- =========================================================================================== -->

    <section class="qt-recent-photo-galleries">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 col-md-3 text-center">
                    <h3>آخرین تصاویر</h3>
                    <a href="{!! action('GalleryController@index',['page'=>1]) !!}" class="btn btn-primary btn-lg qt-recent-photo-galleries-view-all"><i class="fa fa-camera"></i> نمایش همه</a>
                </div>
                @foreach($gallery as $galleryItem)
                    <div class="col-sm-4 col-md-3">
                        <a href="{{ $galleryItem->image  }}" class="qt-fade qt-photo-item">
                            <h4>{!! $galleryItem->title !!}</h4>
                            <img class="" src="{{ $galleryItem->image  }}" alt="{!! $galleryItem->title !!}">
                        </a>
                    </div>
                @endforeach
            </div>

        </div>

    </section>


@endsection


