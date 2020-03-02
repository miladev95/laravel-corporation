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
                    <h4 class="header-title m-t-0 m-b-30">افزودن اعلان جدید</h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <form class="form-horizontal" role="form" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">عنوان</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" class="form-control" required
                                               value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">توضیحات مختصر</label>
                                    <div class="col-md-10">
                                        <input type="text" name="brief" class="form-control" required
                                               value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">توضیحات</label>
                                    <div class="col-md-10">
                                        <textarea type="text" required name="description" class="form-control"></textarea>
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

@endsection
