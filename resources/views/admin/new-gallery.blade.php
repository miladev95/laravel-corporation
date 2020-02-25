@extends('layouts.admin')

@section('custom_head')
    <!-- form Uploads -->
    <link href="{{asset('plugins/fileuploads/css/dropify.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @if(session('status'))
        <div class="alert alert-success text-center">
            {{ session('status') }}
        </div>
    @endisset

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">آپلود عکس</h4>

                            <input type="file" id="image" name="image" class="dropify" data-height="300"/>
                        </div>
                    </div><!-- end col -->
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">عنوان</label>
                    <div class="col-md-10">
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ثبت</button>
            </form>

        </div> <!-- container -->

        <footer class="footer">
            © xAdmin 2019
        </footer>

    </div>
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
