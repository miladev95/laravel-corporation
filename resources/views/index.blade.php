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

                    <div class="carousel-inner">
                        <?php $isFirst = true ?>
                        @foreach($slider as $sliderItem)
                            @if($isFirst)
                                <div class="item active">
                                    <?php $isFirst = false?>
                                    @else
                                        <div class="item">
                                            @endif
                                            <img src="{{asset($sliderItem->image)}}">
                                            <div class="carousel-caption">
                                                <div class="qt-carousel-caption-box">
                                                    <h3>{!! $sliderItem->title !!}</h3>
                                                    <p>{!! $sliderItem->brief !!}</p>


                                                    <a href="{{action('SingleSliderController@index',['id'=>$sliderItem->id])}}" class="btn btn-primary btn-lg qt-carosel-caption-btn">ادامه
                                                        <i
                                                            class="fa fa-arrow-circle-right"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                </div><!-- carousel-inner -->


                                <!-- Slides Navigation -->
                                <ul class="nav nav-pills nav-justified qt-carosel-nav">
                                    <?php
                                    $isFirst = true;
                                    $counter = 0; ?>
                                    @foreach($slider as $sliderItem)
                                        @if($isFirst)
                                            <li data-target="#qt_home_carosel" data-slide-to="{!! $counter!!}"
                                                class="active">
                                            <?php $isFirst = false;
                                            $counter++;
                                            ?>
                                        @else
                                            <li data-target="#qt_home_carosel" data-slide-to="{!! $counter!!}">
                                                <?php $counter++; ?>
                                                @endif
                                                <a href="#">
                                                    <div class="row qt-carosel-nav-item">
                                                        <div class="col-xs-2 qt-carosel-nav-icon">
                                                            <i class="fa fa-list"></i>
                                                        </div>
                                                        <div class="col-xs-10  qt-carosel-nav-text">
                                                            <h3>{!! $sliderItem->title !!}</h3>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                </ul> <!-- qt-carosel-nav -->


                    </div><!-- qt_home_carosel -->

                </div>

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
                        <a class="btn btn-lg btn-primary btn-block"
                           href="{!! action('NotificationController@index')!!}">اطلاعیه <i
                                class="fa fa-arrow-circle-right"></i> </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    @if(isset($post))

                        <div class="qt-page-header">
                            <h2>{!! $post->title !!}</h2>
                        </div>

                        <div class="qt-featured-image qt-page-featured-image">
                            <img src="{!! $post->image !!}" alt="Welcome to CreaTec Website London">
                        </div>

                        <div class="qt-page-body">

                            {!! $post->content !!}

                        </div>
                    @endif

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
                                        <a class="fade qt-sidebar-news-item-img"
                                           href="{!! action('SingleNewsController@index',['id'=>$item_news->id]) !!}">
                                            <img src="{{ asset($item_news->image) }}">
                                        </a>
                                        <h4>
                                            <a href="{!! action('SingleNewsController@index',['id'=>$item_news->id]) !!}">{{ $item_news->title }}</a>
                                        </h4>
                                        <p>
                                            {!!  \Illuminate\Support\Str::limit($item_news->content,50,$end="...")  !!}
                                            <a class="qt-sidebar-read-more"
                                               href="{!! action('SingleNewsController@index',['id'=>$item_news->id]) !!}">ادامه
                                                <i class="fa fa-arrow-circle-right"></i></a>
                                        </p>
                                    </li>
                                @endforeach

                            </ul>

                            <a href="{!! action('NewsListController@index',['page'=>1]) !!}"
                               class="btn btn-primary btn-lg"><i class="fa fa-newspaper-o"></i> نمایش همه</a>

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
