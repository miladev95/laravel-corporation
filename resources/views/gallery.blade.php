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


    <section class="qt-middle">

        <!-- For a center image, just wrap tag below in .container -->
        <div class="qt-featured-image qt-header-featured-image qt-header-featured-image-wide">
            <img src="{!! $gallery[0]->image !!}" alt="{!! $gallery[0]->title !!}">
        </div>

    </section>

    <section class="qt-page-wrapper">
        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="qt-page-header">
                        <h2>آلبوم تصاویر<small></small></h2>
                        <ol class="breadcrumb">
                            <li class="active">آلبوم تصاویر</li>
                            <li><a href="{!! action('IndexController@index') !!}">صفحه اصلی</a></li>
                        </ol>
                    </div>

                    <div class="qt-page-body qt-photo-gallery qt-photo-galleries-2-col">



                        <div class="row">
                            @foreach($gallery as $galleryItem)
                            <div class="col-sm-4">
                                <a href="{!! $galleryItem->image !!}" class="fade qt-photo-item">
                                    <h4>{!! $galleryItem->title !!}</h4>
                                    <img class="" src="{!! $galleryItem->image !!}" alt="{!! $galleryItem->title !!}">
                                </a>
                            </div>
                            @endforeach
                        </div>


                        <hr>

                        <!-- Pagination -->
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <ul class="pagination pagination-lg">
                                    <li ><a href="{!!  action('GalleryController@index',['page'=>1]) !!}">&laquo;</a></li>
                                    @for($i = 1 ; $i<=$totalPages;$i++)
                                        @if($i == $currentPage)
                                        <li class="active"><a href="{!!  action('GalleryController@index',['page'=>$i]) !!}">{{$i}}</a></li>
                                        @else
                                        <li><a href="{!!  action('GalleryController@index',['page'=>$i]) !!}">{{ $i }}</a></li>
                                        @endif
                                    @endfor
                                    <li ><a href="{!!  action('GalleryController@index',['page'=>$totalPages]) !!}">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.row -->

                        <hr>

                    </div><!-- qt-photo-gallery -->

                </div>

            </div>

        </div>
    </section>
@endsection


