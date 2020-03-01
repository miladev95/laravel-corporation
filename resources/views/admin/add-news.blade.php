@extends('layouts.admin')
@section('custom_head')
    <!-- form Uploads -->
    <link href="{{asset('plugins/fileuploads/css/dropify.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet"/>
@endsection
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
                    <h4 class="header-title m-t-0 m-b-30">افزودن خبر جدید</h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="title">عنوان</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" class="form-control" required
                                               placeholder="برنامه نویسی..."
                                               value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="title">تصویر</label>
                                    <div class="col-md-10">
                                        <input type="file" name="image" class="dropify"
                                               data-height="200"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="title">تگ</label>
                                    <div class="col-md-10">
                                        <div class="tags-default">
                                            <input type="text" value="کلمه یک,کلمه دو,کلمه سه" data-role="tagsinput" placeholder="افزودن تگ"/>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit"
                                        class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">
                                    ثبت
                                </button>
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>

            </div>
        </div>
        <!-- end: panel body -->

    </div> <!-- content -->

    <footer class="footer">
        © xAdmin 2020
    </footer>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

@endsection
@section('custom_scripts')
    <!-- file uploads js -->
    <script src="{{asset('plugins/fileuploads/js/dropify.min.js')}}"></script>

    <script>
        var resizefunc = [];
    </script>
    <script type="text/javascript">
        $('.dropify').dropify({
            messages: {
                'default': 'فایل را به اینجا بکشید یا کلیک کنید',
                'replace': 'برای جایگزینی فایل را به اینجا بکشید یا کلیک کنید',
                'remove': 'پاک کردن',
                'error': 'با پوزش فراوان، خطایی رخ داده'
            },
            error: {
                'fileSize': 'حجم فایل بیشتر از حد مجاز است (1M).'
            }
        });
    </script>
@endsection
@section('custom_scripts')
    <script src="{{asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
@endsection
