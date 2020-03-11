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
<!-- =========================== Header ================================================ -->
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
            <i class="fa fa-phone fa-fw"></i>{!! $setting[0]['telephone'] !!}
          </div>
          <div class="qt-header-email">
            <i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:{!! $setting[0]['email'] !!}">{!! $setting[0]['email'] !!}</a>
          </div>

        </div>

      </div>

      <div class="col-sm-12 col-md-4 col-md-pull-4">

        <ul class="qt-header-social-listing">
          <li class="qt-header-social-item"><a href="{!! $setting[0]['facebook'] !!}"><i class="fa fa-facebook-square"></i></a></li>
          <li class="qt-header-social-item"><a href="{!! $setting[0]['telegram'] !!}"><i class="fa fa-google-plus-square"></i></a></li>
          <li class="qt-header-social-item"><a href="{!! $setting[0]['instagram'] !!}"><i class="fa fa-instagram"></i></a></li>
          <li class="qt-header-social-item"><a href="{!! $setting[0]['twitter'] !!}"><i class="fa fa-twitter-square"></i></a></li>
          <li class="qt-header-social-item"><a href="{!! $setting[0]['youtube'] !!}"><i class="fa fa-youtube-square"></i></a></li>
          <li class="qt-header-social-item"><a href="{!! $setting[0]['linkedin'] !!}"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>

      </div>

    </div><!-- row -->
  </div><!-- container -->
</header><!-- header -->
@yield('content')

<!-- =========================================================================================== -->
<!-- =========================== Footer ======================================== -->
<!-- =========================================================================================== -->

<footer class="qt-footer">

  <div class="container">

    <div class="row">

      <section class="col-md-6 col-md-push-3">

        <h3>About us</h3>

        <p>{!! $setting[0]['brief_about'] !!}</p>

      </section>

      <nav class="col-md-3 col-md-pull-6 col-sm-6">

        <h3>Quick Access</h3>

        <ul class="qt-footer-nav">
          <li><a href="{{action("IndexController@index")}}"><i class="fa fa-home fa-fw"></i> Main Page</a></li>
          <li><a href="#"><i class="fa fa-group fa-fw"></i> About us</a></li>
          <li><a href="{{action("GalleryController@index")}}"><i class="fa fa-camera fa-fw"></i> Gallery</a></li>
          <li><a href="{{action("NewsListController@index")}}"><i class="fa fa-calendar fa-fw"></i> News</a></li>
          <li><a href="#"><i class="fa fa-envelope fa-fw"></i> Contact us</a></li>
        </ul>

      </nav>

      <section class="col-md-3 col-sm-6">

        <h3>Address and phone</h3>

        <address>{!! $setting[0]['address'] !!}</address>

        <ul class="qt-footer-contact">
          <li><i class="fa fa-phone fa-fw"></i>{!! $setting[0]['telephone'] !!}</li>
          <li><i class="fa fa-fax fa-fw"></i>{!! $setting[0]['fax'] !!}</li>
          <li><i class="fa fa-envelope-o fa-fw"></i><a href="mailto:{!! $setting[0]['email'] !!}">{!! $setting[0]['email'] !!}</a></li>
        </ul>

      </section>

    </div><!-- end: row -->

    <div class="row">
      <div class="col-md-12">
        <div class="qt-footer-bottom">
          <p>&copy;
All right reserved</p>
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



</body>
</html>
