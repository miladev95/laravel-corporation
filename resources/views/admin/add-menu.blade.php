@extends('layouts.admin')

@section('content')

    @if (session('status'))
        <div class="alert alert-success text-center">
            {{ session('status') }}
        </div>
    @endif


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">افزودن منو جدید</h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <form class="form-horizontal" role="form" method="post">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">عنوان</label>
                                    <div class="col-md-10">
                                        <input type="text" id="title" class="form-control" placeholder="برنامه نویسی..."
                                               value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">انتخاب پدر</label>
                                    <div class="col-sm-10">
                                        <select class="form-control">
                                            @foreach($parents as $parentsItem)
                                                <option id="parent" value="{{$parentsItem->id}}">{{$parentsItem->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">
                                    ثبت
                                </button>
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>

            </div> <!-- content -->
        </div>
        <!-- end: panel body -->

    </div> <!-- content -->

    <footer class="footer">
        © xAdmin 2019
    </footer>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

@endsection
