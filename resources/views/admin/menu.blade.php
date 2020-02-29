@extends('layouts.admin')

@section('content')

    @if (session('status'))
        <div class="alert alert-success text-center">
            {!! session('status') !!}
        </div>
    @endif

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="editable-responsive">
                <table class="table table-striped" id="datatable-editable">
                    <thead>
                    <tr>
                        <th>عنوان</th>
                        <th>منوی پدر</th>
                        <th>تصویر</th>
                        <th>لینک</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 0;?>
                    @foreach($menu as $menuItem)
                        @if($counter % 2 == 0)
                            <tr class="gradeX">
                                <td>{{$menuItem->title}}</td>

                                @if(empty($menuItem->parent))
                                    <td>-</td>
                                @else
                                    <td>{{$menuItem->parent}}</td>
                                @endif
                                @if(empty($menuItem->image))
                                    <td></td>
                                @else
                                    <td><img src="{{asset($menuItem->image)}}" width="100px" height="100px"/></td>
                                @endif
                                <td>{{$menuItem->link}}</td>
                                <td class="actions">

                                    <form action="/admin/menu/{{$menuItem->id}}/edit">
                                        <button class='btn btn-primary button-next' type="submit">ویرایش <i
                                                class="fa fa-pencil"></i></button>
                                    </form>
                                    {!! Form::open(['url'=>'/admin/menu/?id='.$menuItem->id,'method'=>'DELETE','class'=>'form-horizontal',
                                        'role'=>'form','onsubmit' => 'return confirm("آیا مطمئن هستید؟")'])!!}
                                        @csrf
                                        <button class='btn btn-primary button-next' id="deleteGradeX" type="submit">حذف
                                            <i class="fa fa-trash-o"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @else
                            <tr class="gradeC">
                                <td>{{$menuItem->title}}</td>
                                <td>{{$menuItem->parent}}</td>
                                <td>{{$menuItem->image}}</td>
                                <td>{{$menuItem->link}}</td>
                                <td class="actions">
                                    <form action="/admin/menu/{{$menuItem->id}}/edit">
                                        @csrf
                                        <button class='btn btn-primary button-next' type="submit">ویرایش <i
                                                class="fa fa-pencil"></i></button>
                                    </form>
                                    <{!! Form::open(['url'=>'/admin/menu/?id='.$menuItem->id,'method'=>'DELETE','class'=>'form-horizontal',
                                        'role'=>'form','onsubmit' => 'return confirm("آیا مطمئن هستید؟")'])!!}
                                    @csrf
                                    <button class='btn btn-primary button-next' id="deleteGradeX" type="submit">حذف
                                        <i class="fa fa-trash-o"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <a href="{{url('/admin/menu/add')}}" class="btn btn-primary waves-effect waves-light">افزودن منوی
                    جدید</a>
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
    <script>
        document
            .getElementById("deleteGradeC")
            .addEventListener("click", function (e) { //e => event
                if (!confirm("آیا مطمئن هستید؟")) {
                    e.preventDefault();
                }
            });
        document
            .getElementById("deleteGradeX")
            .addEventListener("click", function (e) { //e => event
                if (!confirm("آیا مطمئن هستید؟")) {
                    e.preventDefault();
                }
            });
    </script>
@endsection
