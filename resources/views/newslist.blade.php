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

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope"></i> تماس با ما <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class=""><a href="contact-us.html">تماس با ما 1</a></li>
            <li class=""><a href="contact-us-2.html">تماس با ما 2</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-navicon"></i> دیگر <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class=""><a href="faq.html">پرسش و پاسخ</a></li>
            <li class=""><a href="pricing-tables.html">جدول قیمت</a></li>
            <li class=""><a href="404.html">پیغام خطا 404</a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-camera"></i> تصاویر<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class=""><a href="photo-albums-2-col.html"> آلبوم تصاویر 2 ستونه</a></li>
            <li class=""><a href="photo-albums-3-col.html"> آلبوم تصاویر 3 ستونه</a></li>
            <li class=""><a href="photo-gallery-4-col.html">آلبوم تصاویر 4 ستونه</a></li>
            <li class=""><a href="photo-gallery-6-col.html">آلبوم تصاویر 6 ستونه</a></li>
          </ul>
        </li>



        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-folder-open"></i> نمونه کار <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class=""><a href="portfolio-1-col.html">نمونه کار 1 ستونه</a></li>
            <li class=""><a href="portfolio-2-col.html">نمونه کار 2 ستونه</a></li>
            <li class=""><a href="portfolio-3-col.html">نمونه کار 3 ستونه</a></li>
            <li class=""><a href="portfolio-single-item-1.html">نمونه کار تکی 1</a></li>
            <li class=""><a href="portfolio-single-item-2.html">نمونه کار تکی 2</a></li>
          </ul>
        </li>



        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-calendar"></i> وبلاگ <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class=""><a href="blog-listing-1.html">همه نوشته ها 1</a></li>
            <li class=""><a href="blog-listing-2.html">همه نوشته ها 2</a></li>
            <li class=""><a href="blog-single-post.html">نوشته تکی</a></li>
          </ul>
        </li>

        <li class=""><a href="services.html"> <i class="fa fa-gear"></i> خدمات</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-group"></i> درباره ما <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class=""><a href="page-who-we-are.html">ما که هستیم</a></li>
            <li class=""><a href="testimonials.html">از زبان مشتریان</a></li>
            <li class=""><a href="page-simple.html">صفحه ساده</a></li>
            <li class=""><a href="page-full.html">صفحه کامل</a></li>
          </ul>
        </li>

        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-home"></i> صفحه اصلی <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="active"><a href="index.html">صفحه اصلی حالت 1</a></li>
            <li class=" "><a href="index-2.html">صفحه اصلی حالت 2</a></li>
          </ul>
        </li>

      </ul>

    </div><!--/.nav-collapse -->

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
          <h2>لیست نوشته ها<small></small></h2>
          <ol class="breadcrumb">
	<li class="active">همه نوشته ها 1</li>
            <li><a href="{{url("/")}}">صفحه اصلی</a></li>
          </ol>
        </div>

        <div class="qt-page-body">


          <ul class="list-unstyled row qt-blog-listing">
            @foreach($news as $newsItem)
            <li class="col-md-12 qt-blog-listing-item">

              <h3><a href="{{action('SingleNewsController@index',$newsItem->id)}}">{{$newsItem->title}}</a></h3>

              <div class="qt-post-meta">
                <span><i class="fa fa-calendar fa-fw"></i>{{ $newsItem->date }}</span>
                  <?php
                    $newsTag = $newsItem->tag;
                    $newsTag = explode("-",$newsTag);
                    echo $newsTag[0];
                  ?>
                <span><i class="fa fa-tags fa-fw"></i> <a href="#">تجارت</a>, <a href="#">شرکت</a>, <a href="#">گرافیک</a>, <a href="#">تبلیغات</a></span>
              </div>

              <a class="fade qt-blog-listing-item-img" href="{{action("SingleNewsController@index",$newsItem->id)}}">
                <img src="{{ $newsItem->image }}" alt="A good news item title for the blog">
              </a>

              <p>
               {{ $newsItem->content }}<a class="qt-sidebar-read-more" href="{{action("SingleNewsController@index",$newsItem->id)}}">ادامه <i class="fa  fa-arrow-circle-right"></i></a>
              </p>

            </li>
            @endforeach


          </ul>

          <!-- Pager for the blog archive -->

          <hr>

          <div class="well well-lg qt-blog-navbar">
            <div class="row">
              <div class="col-sm-4 col-sm-push-2">
                <a href="#" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-arrow-circle-left"></i> قبلی</a>
              </div>
              <div class="col-sm-4 col-sm-push-2">
                <a href="#" class="btn btn-primary btn-lg btn-block"> بعدی <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>

          <!-- End: Pager -->

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
              <input type="text" name="EMAIL" class="form-control" placeholder="Type here to search..." required>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Search</button>
              </span>
            </div><!-- /input-group -->

            </form>

          </div>
        </div>

<!-- =========================================================================================== -->
<!-- =========================== Widget Categories ============================================= -->
<!-- =========================================================================================== -->

        <div class="qt-widget-box">

          <div class="qt-widget-header">
            <h3>موضوعات</h3>
          </div>

          <div class="qt-widget-body">

            <ul class="list-group">
              <li class="list-group-item"><a href="#" >بوت استراپ&nbsp</a> <span class="badge">6</span></li>
              <li class="list-group-item"><a href="#" >بازاریابی&nbsp</a> <span class="badge">4</span></li>
              <li class="list-group-item"><a href="#" >توسعه&nbsp</a> <span class="badge">6</span></li>
              <li class="list-group-item"><a href="#" >طراحی سایت&nbsp</a> <span class="badge">6</span></li>
              <li class="list-group-item"><a href="#" >وردپرس&nbsp</a> <span class="badge">5</span></li>
            </ul>

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
<!-- =========================== Widget Well ============================================= -->
<!-- =========================================================================================== -->

        <div class="qt-widget-box">

          <div class="qt-widget-body">

            <!-- Side Widget Well -->
            <div class="well">
              <h4>عنوان سایدبار</h4>
              <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
            </div>

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




