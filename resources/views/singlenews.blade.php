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

              <form role="form">
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">ارسال</button>
              </form>

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

        <div class="qt-widget-box">

          <div class="qt-widget-header">
            <h3>جستجو در سایت</h3>
          </div>

          <div class="qt-widget-body">

            <form>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" name="EMAIL" class="form-control" placeholder="متن مورد نظر را وارد کنید" required>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">جستجو</button>
              </span>
            </div><!-- /input-group -->

            </form>

          </div>
        </div>


<!-- =========================================================================================== -->
<!-- =========================== Widget Newsletter ============================================= -->
<!-- =========================================================================================== -->

        <div class="qt-widget-box">

          <div class="qt-widget-header">
            <h3>عضویت در خبرنامه</h3>
          </div>

          <div class="qt-widget-body">
            <p>برای دریافت آخرین اخبار سایت ابتدا ایمیل خود را وارد و روی گزینه عضویت کلیک کنید</p>

            <form>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
              <input type="text" name="EMAIL" class="form-control" placeholder="ایمیل خود را وارد کنید" required>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">عضویت</button>
              </span>
            </div><!-- /input-group -->

            </form>

          </div>

        </div>


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
