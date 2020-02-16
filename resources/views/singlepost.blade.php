@extends('layouts.main')

@section('content')
    @if (session('status'))
        <div class="alert alert-success text-center">
            {{ session('status') }}
        </div>
    @endif
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
    <!-- =================== Wide Featured Image =================================================== -->
    <!-- =========================================================================================== -->

    <section class="qt-middle">

        <!-- For a center image, just wrap tag below in .container -->
        <div class="qt-featured-image qt-header-featured-image qt-header-featured-image-wide">
            <img src="{{ $gallery[0]->image }}" alt="Blog Listing">
        </div>

    </section>

    <!-- =========================================================================================== -->
    <!-- =================== Begin page content ==================================================== -->
    <!-- =========================================================================================== -->

    <section class="qt-page-wrapper">
        <div class="container">

            <div class="row">

                <div class="col-md-8">
                    <div class="qt-page-header">
                        <h2>اخبار<small></small></h2>
                        <ol class="breadcrumb">
                            <li class="active">اخبار</li>
                            <li><a href="{{url("/")}}">صفحه اصلی</a></li>
                        </ol>
                    </div>
                    <div class="qt-page-header">
                        <h2>{{$news->title}}<small> </small></h2>

                    </div>

                    <div class="qt-post-meta">
                        <?php
                        $newsTag = $news->tags;
                        $newsTag = explode("-",$newsTag);
                        ?>
                        <span><i class="fa fa-tags fa-fw"></i>
            @foreach($newsTag as $tagItem)
                                <a href="{{action("TagsController@index",$tagItem)}}">{{$tagItem}}</a>
                            @endforeach
            </span>
                    </div>

                    <div class="qt-page-body">

                        {!!  $news->content !!}


                        <section class="qt-comments-wrapper">

                            <hr>



                            <!-- Blog Comments -->

                            <!-- Comments Form -->
                            <div class="well">

                                <h4>گذاشتن نظر</h4>

                                <table>
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="نام خود را وارد کنید" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email"  class="form-control" placeholder="ایمیل خود را وارد کنید" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="کامنت خود را وارد کنید" name="comment" rows="3" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">ارسال</button>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                        <input type="hidden" name="id" value="{{ $news->id }}"/>
                                    </form>
                                </table>
                                <hr>

                                <!-- Posted Comments -->

                            @foreach($newsComment as $commentItem)

                                <!-- Comment -->
                                    <div class="media">

                                        <a class="pull-left" href="#">
                                            <img class="media-object" width="64" alt="">
                                        </a>

                                        <div class="media-body">
                                            <h4 class="media-heading">{{ $commentItem->date }} -- {{ $commentItem->name }}  </h4>
                                            {{$commentItem->comment}}
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </section>

                    </div>


                </div>

                <div class="col-md-4">

                    <!-- =========================================================================================== -->
                    <!-- =========================== Widget Search ================================================= -->
                    <!-- =========================================================================================== -->
                @include('layouts.search-side')

                <!-- =========================================================================================== -->
                    <!-- =========================== Widget Newsletter ============================================= -->
                    <!-- =========================================================================================== -->

                @include('layouts.join-news-side')


                <!-- =========================================================================================== -->
                    <!-- =========================================================================================== -->
                    <!-- =========================================================================================== -->

                </div>

            </div>

        </div>
    </section>


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
