@extends('layouts.admin')

@section('content')



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
                            <li><a href="#">حذف</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">{{$galleryItem->title}}</h4>
                    <img src="{!! $galleryItem->image!!}">

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
