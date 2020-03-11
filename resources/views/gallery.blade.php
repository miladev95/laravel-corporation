@extends('layouts.main')

@section('content')

    <!-- =========================================================================================== -->
    <!-- =========================== Widget Menu =================================================== -->
    <!-- =========================================================================================== -->

    @include('layouts.menu')


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
                        <h2>Gallery<small></small></h2>
                        <ol class="breadcrumb">
                            <li class="active">Gallery</li>
                            <li><a href="{!! action('IndexController@index') !!}">Main Page</a></li>
                        </ol>
                    </div>

                    <div class="qt-photo-gallery-single">



                        <div class="row">
                            @foreach($gallery as $galleryItem)
                            <div class="col-sm-4">
                                <a href="{!! $galleryItem->image !!}" class="fade qt-photo-item">
                                    <h4>{!! $galleryItem->title !!}</h4>
                                    <img class="img-responsive" src="{!! $galleryItem->image !!}" alt="{!! $galleryItem->title !!}">
                                </a>
                            </div>
                            @endforeach
                        </div>


                        <hr>

                        <!-- Pagination -->

                        <!-- /.row -->

                        <hr>

                    </div><!-- qt-photo-gallery -->

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

                </div>

            </div>

        </div>
    </section>
@endsection


