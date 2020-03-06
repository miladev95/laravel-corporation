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
                        <th>تصویر</th>
                        <th>تگ</th>
                        <th>تاریخ</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 0;?>
                    @foreach($post as $postItem)
                        @if($counter % 2 == 0)
                            <tr class="gradeX">
                                <td>{{$postItem->title}}</td>
                                @if(empty($postItem->image))
                                    <td></td>
                                @else
                                    <td><img src="{{asset($postItem->image)}}" width="100px" height="100px"/></td>
                                @endif
                                <td>{{$postItem->tags}}</td>
                                <td>{{$postItem->date}}</td>
                                <td class="actions">
                                    <form action="/admin/post/{{$postItem->id}}/edit">
                                        <button class='btn btn-primary button-next' type="submit">ویرایش <i
                                                class="fa fa-pencil"></i></button>
                                    </form>

                                    {!! Form::open(['url'=>'/admin/post/?id='.$postItem->id,'method'=>'DELETE','class'=>'form-horizontal',
                                        'role'=>'form','onsubmit' => 'return confirm("آیا مطمئن هستید؟")'])!!}
                                    @csrf
                                    <button class='btn btn-primary button-next' id="deleteGradeX" type="submit">حذف
                                        <i class="fa fa-trash-o"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @else
                            <tr class="gradeC">
                                <td>{{$postItem->title}}</td>
                                <td>{{$postItem->tags}}</td>
                                <td>{{$postItem->date}}</td>
                                <td class="actions">
                                    <form action="/admin/post/{{$postItem->id}}/edit">
                                        <button class='btn btn-primary button-next' type="submit">ویرایش <i
                                                class="fa fa-pencil"></i></button>
                                    </form>

                                    {!! Form::open(['url'=>'/admin/post/?id='.$postItem->id,'method'=>'DELETE','class'=>'form-horizontal',
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
                <a href="{{url('/admin/post/add')}}" class="btn btn-primary waves-effect waves-light">افزودن پست جدید</a>
            </div>
        </div>
        <!-- end: panel body -->

    </div> <!-- content -->

    <footer class="footer">
        © xAdmin 2020
    </footer>

@endsection
