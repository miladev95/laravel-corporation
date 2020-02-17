@extends('layouts.main')

@section('content')
    @if (session('message'))
        <div class="alert {{ session('alert-style') }} text-center">
            {{ session('message') }}
        </div>
    @endif

    <!-- =========================================================================================== -->
    <!-- =========================== Widget Menu =================================================== -->
    <!-- =========================================================================================== -->

    @include('layouts.menu')


<!-- =========================================================================================== -->
<!-- =================== Home Page Middle Area ================================================= -->
<!-- =========================================================================================== -->

<section class="qt-middle qt-home-middle qt-home-middle-with-image">

  <div class="container">

    <div class="qt-home-slider qt-one-edge-shadow">

      <div id="qt_home_carosel" class="carousel slide qt-home-carosel" data-ride="carousel">

        <!-- All Slides Container -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="{!! $slider[0]->image !!}" alt="Slider 1">
             <div class="carousel-caption">
              <div class="qt-carousel-caption-box">
                <h3>{!! $slider[0]->title !!}</h3>
                <p>{!! $slider[0]->brief !!}</p>


                <a href="#" class="btn btn-primary btn-lg qt-carosel-caption-btn">ادامه <i class="fa fa-arrow-circle-right"></i></a>

              </div>
            </div>
          </div><!-- item -->
          <div class="item ">
            <img src="{!! $slider[1]->image !!}" alt="Slider 2">
             <div class="carousel-caption">
              <div class="qt-carousel-caption-box">
                <h3>{!! $slider[1]->title !!}</h3>
                <p>{!! $slider[1]->brief !!}</p>

                <a href="#" class="btn btn-primary btn-lg qt-carosel-caption-btn">ادامه <i class="fa fa-arrow-circle-right"></i></a>

              </div>
            </div>
          </div>

          <div class="item">
            <img src="{!! $slider[2]->image !!}" alt="Slider 3">
             <div class="carousel-caption">
              <div class="qt-carousel-caption-box">
                <h3>{!! $slider[2]->title !!}</h3>
                <p>{!! $slider[2]->brief !!}</p>

                <a href="#" class="btn btn-primary btn-lg qt-carosel-caption-btn">ادامه <i class="fa fa-arrow-circle-right"></i></a>

              </div>
            </div>
          </div><!-- item -->

        </div><!-- carousel-inner -->

        <!-- Slides Navigation -->
        <ul class="nav nav-pills nav-justified qt-carosel-nav">
          <li data-target="#qt_home_carosel" data-slide-to="0" class="active">
            <a href="#">
              <div class="row qt-carosel-nav-item">
                <div class="col-xs-2 qt-carosel-nav-icon">
                  <i class="fa fa-list"></i>
                </div>
                <div class="col-xs-10  qt-carosel-nav-text">
                  <h3>{!! $slider[0]->title !!}</h3>
                </div>
              </div>
            </a>
          </li>
          <li data-target="#qt_home_carosel" data-slide-to="1">
            <a href="#">
              <div class="row qt-carosel-nav-item">
                <div class="col-xs-2 qt-carosel-nav-icon">
                  <i class="fa fa-cogs"></i>
                </div>
                <div class="col-xs-10  qt-carosel-nav-text">
                  <h3>{!! $slider[1]->title !!}</h3>
                </div>
              </div>
            </a>
          </li>
          <li data-target="#qt_home_carosel" data-slide-to="2">
            <a href="#">
              <div class="row qt-carosel-nav-item">
                <div class="col-xs-2 qt-carosel-nav-icon">
                  <i class="fa fa-users"></i>
                </div>
                <div class="col-xs-10  qt-carosel-nav-text">
                  <h3>{!! $slider[2]->title !!}</h3>
                </div>
              </div>
            </a>
          </li>
        </ul> <!-- qt-carosel-nav -->


      </div><!-- qt_home_carosel -->

    </div>

  </div>

</section>

<!-- =========================================================================================== -->
<!-- =================== Begin page content ==================================================== -->
<!-- =========================================================================================== -->

<section class="qt-page-wrapper qt-home-page">
  <div class="container">

    <!-- Call to Action Section -->
    <div class="well well-lg">
      <div class="row">
        <div class="col-md-8">
          <p class="qt-clean-bottom">{!! $notification->brief !!}</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-primary btn-block" href="{!! action('NotificationController@index')!!}">اطلاعیه <i class="fa fa-arrow-circle-right"></i> </a>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-md-8">

        <div class="qt-page-header">
          <h2>{!! $post->title !!}</h2>
        </div>

        <div class="qt-featured-image qt-page-featured-image">
          <img src="{!! $post->image !!}" alt="Welcome to CreaTec Website London">
        </div>

        <div class="qt-page-body">

          {!! $post->content !!}

        </div>

      </div>

      <div class="col-md-4">

<!-- =========================================================================================== -->
<!-- =========================== Newsletter ==================================================== -->
<!-- =========================================================================================== -->

        @include('layouts.join-news-side')

<!-- =========================================================================================== -->
<!-- =========================== News & Events ================================================= -->
<!-- =========================================================================================== -->

        <div class="qt-widget-box">
          <div class="qt-widget-header">
            <h3>آخرین اخبار و رویدادها</h3>
          </div>

          <div class="qt-widget-body">
            <ul class="list-group row qt-sidebar-news-listing">
                @foreach ($news as $item_news)
                    <li class="list-group-item col-sm-4 col-md-12 qt-sidebar-news-item">
                        <a class="fade qt-sidebar-news-item-img" href="{!! action('SingleNewsController@index',['id'=>$item_news->id]) !!}">
                            <img src="{{ asset($item_news->image) }}">
                        </a>
                        <h4><a href="{!! action('SingleNewsController@index',['id'=>$item_news->id]) !!}">{{ $item_news->title }}</a></h4>
                        <p>
                            {!!  \Illuminate\Support\Str::limit($item_news->content,50,$end="...")  !!}<a class="qt-sidebar-read-more" href="{!! action('SingleNewsController@index',['id'=>$item_news->id]) !!}">ادامه <i class="fa fa-arrow-circle-right"></i></a>
                        </p>
                    </li>
                @endforeach

            </ul>

            <a href="{!! action('NewsListController@index',['page'=>1]) !!}" class="btn btn-primary btn-lg"><i class="fa fa-newspaper-o"></i> نمایش همه</a>

          </div>
        </div>

<!-- =========================================================================================== -->
<!-- =========================================================================================== -->
<!-- =========================================================================================== -->

      </div>

    </div>

  </div>
</section>


    <!-- =========================================================================================== -->
    <!-- =========================== Recent Photo Galleries========================================= -->
    <!-- =========================================================================================== -->

    @include('layouts.last-pics')

@endsection
