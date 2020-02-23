@extends('layouts.admin')

@section('content')

    @isset ($message)
        <div class="alert alert-success text-center">
            {{ $message }}
        </div>
    @endisset


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            @foreach($gallery as $galleryItem)
                <div class="col-lg-6">
                    <div class="card-box">

                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ action("Admin\GalleryController@index",['id'=>$galleryItem->id]) }}">حذف</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">{{$galleryItem->title}}</h4>
                        <img src="{{ asset($galleryItem->image)}}" width="200px" height="200px">

                    </div>
                </div>
            @endforeach

        </div> <!-- content -->

        <footer class="footer">
            © xAdmin 2019
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

@endsection
