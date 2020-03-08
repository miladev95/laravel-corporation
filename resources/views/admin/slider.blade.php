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
            @foreach($slider as $sliderItem)
                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ action("Admin\SliderController@destroy",['id'=>$sliderItem->id]) }}">حذف</a>
                                </li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">{{$sliderItem->title}}</h4>
                        <img src="{{ asset($sliderItem->image)}}" width="400px" height="200px">
                        <h5>{{$sliderItem->brief}}</h5>
                        <h5>{{$sliderItem->description}}</h5>
                    </div>
                </div>
            @endforeach

        </div> <!-- content -->

        <footer class="footer">
            © xAdmin 2020
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

@endsection
