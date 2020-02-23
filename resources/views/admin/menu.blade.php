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


        </div> <!-- content -->

        <footer class="footer">
            © xAdmin 2019
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

@endsection
