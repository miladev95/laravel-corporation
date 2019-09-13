<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{!! $setting[0]['title'] !!}</title>

  <!-- Favicon - Browser favourite / shortcut icon for the website -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
  <!-- Magnific Popup Lightbox -->
  <link rel="stylesheet" href="{{ asset('vendor/magnifix-popup/magnific-popup.css') }}">

  <!-- Project Core CSS File ( Modified version of Bootstrap +  with Custom Styles at the bottom ) -->
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">

  <!-- Your Custom CSS to override supplied Styles ) -->
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="resources/vendor/html5/html5shiv.min.js"></script>
    <script src="resources/vendor/html5/respond.min.js"></script>
  <![endif]-->


</head>
<body>


<!-- =========================================================================================== -->
<!-- =========================== Website Header ================================================ -->
<!-- =========================================================================================== -->

<header id="header" class="qt-header">
  <div class="container">
    <div class="row">

      <div class="col-sm-6 col-md-4">

        <a class="qt-header-logo" href="index.html">
          <img src="{{ asset('img/logo.png') }}" class="img-responsive" alt="Logo">
        </a>

      </div>

      <div class="col-sm-6 col-md-4 col-md-push-4">

        <div class="qt-header-contact">

          <div class="qt-header-phone">
            <i class="fa fa-phone fa-fw"></i>١٢٣٤٥٦٧٨ ٠٢١
          </div>
          <div class="qt-header-email">
            <i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:info@yourbusiness.com">info@yourbusiness.com</a>
          </div>

        </div>

      </div>

      <div class="col-sm-12 col-md-4 col-md-pull-4">

        <ul class="qt-header-social-listing">
          <li class="qt-header-social-item"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li class="qt-header-social-item"><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
          <li class="qt-header-social-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li class="qt-header-social-item"><a href="#"><i class="fa fa-twitter-square"></i></a></li>
          <li class="qt-header-social-item"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
          <li class="qt-header-social-item"><a href="#"><i class="fa fa-youtube-square"></i></a></li>
          <li class="qt-header-social-item"><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>

      </div>

    </div><!-- row -->
  </div><!-- container -->
</header><!-- header -->


<!-- =========================================================================================== -->
<!-- =========================== Main Navigation Bar =========================================== -->
<!-- =========================================================================================== -->

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
<!-- =================== Home Page Middle Area ================================================= -->
<!-- =========================================================================================== -->

<section class="qt-middle qt-home-middle qt-home-middle-with-image">

  <div class="container">

    <div class="qt-home-slider qt-one-edge-shadow">

      <div id="qt_home_carosel" class="carousel slide qt-home-carosel" data-ride="carousel">

        <!-- All Slides Container -->
        <div class="carousel-inner">

          <div class="item active">
            <img src="{{ asset('img/slider/slider-1.jpg') }}" alt="Slider 1">
             <div class="carousel-caption">
              <div class="qt-carousel-caption-box">
                <h3>عنوان برای اسلاید شماره 1</h3>
                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید</p>


                <a href="#" class="btn btn-primary btn-lg qt-carosel-caption-btn">ادامه <i class="fa fa-arrow-circle-right"></i></a>

              </div>
            </div>
          </div><!-- item -->

          <div class="item">
            <img src="{{ asset('img/slider/slider-2.jpg') }}" alt="Slider 2">
             <div class="carousel-caption">
              <div class="qt-carousel-caption-box">
                <h3>عنوان برای اسلاید شماره 2</h3>
                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید</p>

                <a href="#" class="btn btn-primary btn-lg qt-carosel-caption-btn">ادامه <i class="fa fa-arrow-circle-right"></i></a>

              </div>
            </div>
          </div><!-- item -->

          <div class="item">
            <img src="{{ asset('img/slider/slider-3.jpg') }}" alt="Slider 3">
             <div class="carousel-caption">
              <div class="qt-carousel-caption-box">
                <h3>عنوان برای اسلاید شماره 3</h3>
                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید</p>

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
                  <h3>پروژه های ما</h3>
                  <p>لورم ایپسوم یا طرح‌نما متنی آزمایشی و بی‌معنی</p>
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
                  <h3>ارائه خدمات ما</h3>
                  <p>لورم ایپسوم یا طرح‌نما متنی آزمایشی و بی‌معنی</p>
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
                  <h3>تیم قوی و حرفه ای</h3>
                  <p>لورم ایپسوم یا طرح‌نما متنی آزمایشی و بی‌معنی</p>
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
          <p class="qt-clean-bottom">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-primary btn-block" href="#">اطلاعیه <i class="fa fa-arrow-circle-right"></i> </a>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-md-8">

        <div class="qt-page-header">
          <h2>عنوان<small>اصلی </small></h2>
        </div>

        <div class="qt-featured-image qt-page-featured-image">
          <img src="{{ asset('img/featured-5.jpg') }}" alt="Welcome to CreaTec Website London">
        </div>

        <div class="qt-page-body">

          <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

          <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

          <p class="lead">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

          <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

          <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

        </div>

      </div>

      <div class="col-md-4">

<!-- =========================================================================================== -->
<!-- =========================== Newsletter ==================================================== -->
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
<!-- =========================== News & Events ================================================= -->
<!-- =========================================================================================== -->

        <div class="qt-widget-box">
          <div class="qt-widget-header">
            <h3>آخرین اخبار و رویدادها</h3>
          </div>

          <div class="qt-widget-body">
            <ul class="list-group row qt-sidebar-news-listing">

              <li class="list-group-item col-sm-4 col-md-12 qt-sidebar-news-item">
                <a class="fade qt-sidebar-news-item-img" href="blog-single-post.html">
                  <img src="{{ asset('img/thumbnail-1-sm.jpg') }}" alt="A good news item title for the sidebar">
                </a>
                <h4><a href="blog-single-post.html">عنوان خبر 1</a></h4>
                <p>
                  لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود ... <a class="qt-sidebar-read-more" href="blog-single-post.html">ادامه <i class="fa fa-arrow-circle-right"></i></a>
                </p>
              </li>

              <li class="list-group-item col-sm-4 col-md-12 qt-sidebar-news-item">
                <a class="fade qt-sidebar-news-item-img" href="blog-single-post.html">
                  <img src="{{ asset('img/thumbnail-2-sm.jpg') }}" alt="A good news item title for the sidebar">
                </a>
                <h4><a href="blog-single-post.html">عنوان خبر 2</a></h4>
                <p>
                  لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود ... <a class="qt-sidebar-read-more" href="blog-single-post.html">ادامه <i class="fa  fa-arrow-circle-right"></i></a>
                </p>
              </li>

              <li class="list-group-item col-sm-4 col-md-12 qt-sidebar-news-item">
                <a class="fade qt-sidebar-news-item-img" href="blog-single-post.html">
                  <img src="{{ asset('img/thumbnail-3-sm.jpg') }}" alt="A good news item title for the sidebar">
                </a>
                <h4><a href="blog-single-post.html">عنوان خبر 3</a></h4>
                <p>
                  لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود ... <a class="qt-sidebar-read-more" href="blog-single-post.html">ادامه <i class="fa  fa-arrow-circle-right"></i></a>
                </p>
              </li>

            </ul>

            <a href="blog-listing-1.html" class="btn btn-primary btn-lg"><i class="fa fa-newspaper-o"></i> نمایش همه</a>

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
<!-- =========================== Recent Photo Galleries ======================================== -->
<!-- =========================================================================================== -->

<section class="qt-recent-photo-galleries">

  <div class="container">

    <div class="row">

      <div class="col-sm-12 col-md-3 text-center">
        <h3>آخرین تصاویر</h3>
        <a href="photo-albums-3-col.html" class="btn btn-primary btn-lg qt-recent-photo-galleries-view-all"><i class="fa fa-camera"></i> نمایش همه</a>
      </div>
      <div class="col-sm-4 col-md-3">
        <a href="photo-gallery-6-col.html" class="qt-fade qt-photo-item">
          <h4>تصویر 1</h4>
          <img class="" src="{{ asset('img/gallery/4.jpg') }}" alt="">
        </a>
      </div>
      <div class="col-sm-4 col-md-3">
        <a href="photo-gallery-6-col.html" class="qt-fade qt-photo-item">
          <h4>تصویر 2</h4>
          <img class="" src="{{ asset('img/gallery/2.jpg') }}" alt="">
        </a>
      </div>
      <div class="col-sm-4 col-md-3">
        <a href="photo-gallery-6-col.html" class="qt-fade qt-photo-item">
          <h4>تصویر 3</h4>
          <img class="" src="{{ asset('img/gallery/11.jpg') }}" alt="">
        </a>
      </div>

    </div>

  </div>

</section>


<!-- =========================================================================================== -->
<!-- =========================== Footer and Footer Bar ========================================= -->
<!-- =========================================================================================== -->


<footer class="qt-footer">

  <div class="container">

    <div class="row">

      <section class="col-md-6 col-md-push-3">

        <h3>درباره ما</h3>

        <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

        <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

      </section>

      <nav class="col-md-3 col-md-pull-6 col-sm-6">

        <h3>دسترسی سریع</h3>

        <ul class="qt-footer-nav">
          <li><a href="#"><i class="fa fa-home fa-fw"></i> صفحه اصلی</a></li>
          <li><a href="#"><i class="fa fa-group fa-fw"></i> درباره ما</a></li>
          <li><a href="#"><i class="fa fa-camera fa-fw"></i> گالری تصاویر</a></li>
          <li><a href="#"><i class="fa fa-folder-open fa-fw"></i> نمونه کارها</a></li>
          <li><a href="#"><i class="fa fa-calendar fa-fw"></i> اخبار</a></li>
          <li><a href="#"><i class="fa fa-envelope fa-fw"></i> تماس با ما</a></li>
        </ul>

      </nav>

      <section class="col-md-3 col-sm-6">

        <h3>آدرس و شماره تماس</h3>

        <address><p><strong>تهران</strong><br>بزرگراه همت ، خیابان</p></address>

        <ul class="qt-footer-contact">
          <li><i class="fa fa-phone fa-fw"></i> ٠٢١ ١٢٣٤٥٦٧٨</li>
          <li><i class="fa fa-fax fa-fw"></i> ٠٢١ ١٢٣٤٥٦٧٨</li>
          <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:info@yourbusiness.com">info@yourbusiness.com</a></li>
        </ul>

      </section>

    </div><!-- end: row -->

    <div class="row">
      <div class="col-md-12">
        <div class="qt-footer-bottom">
          <p>&copy;
کلیه حقوق برای این سایت محفوظ می باشد.....
 <a href="#" target="_blank">توسعه</a> و <a href="#" target="_blank">طراحی</a></p>
        </div>
      </div>
    </div>

  </div>

</footer>


<!-- =========================================================================================== -->
<!-- =========================================================================================== -->
<!-- =========================================================================================== -->

<!-- =========================================================================================== -->
<!-- ===================== Core JavaScript and Additional Plugin =============================== -->
<!-- =========================================================================================== -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('vendor/jquery/jquery-1.11.1.min.js') }}"></script>

<!-- all compiled bootstap plugins -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Magnific Popup Lightbox -->
<script src="{{ asset('vendor/magnifix-popup/jquery.magnific-popup.min.js') }}"></script>

<!-- =========================== Contact Page Specific ========================================= -->

<!-- Google Maps API -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<!-- gMaps Plugin -->
<script src="{{ asset('vendor/gmaps/gmaps.js') }}"></script>

<!-- Bootstrap form validation library -->
<script src="{{ asset('vendor/jqBootstrapValidation/jqBootstrapValidation.js') }}"></script>

<!-- Script for the contact us form -->
<script src="{{ asset('js/contact-us.js') }}"></script>

<!-- =========================================================================================== -->

<!-- Project Core JavaScript -->
<script src="{{ asset('js/main.js') }}"></script>


<!-- =========================================================================================== -->
<!-- =========================================================================================== -->
<!-- =========================================================================================== -->

</body>
</html>
