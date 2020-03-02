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
                        <th>نام</th>
                        <th>ایمیل</th>
                        <th>متن کامنت</th>
                        <th>عنوان خبر</th>
                        <th>تاریخ</th>
                        <th>وضعیت کامنت</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 0;?>
                    @foreach($postComment as $commentItem)
                        @if($counter % 2 == 0)
                            <tr class="gradeX">
                                <td>{{$commentItem->name}}</td>
                                <td>{{$commentItem->email}}</td>
                                <td>{{$commentItem->comment}}</td>
                                <td><a href="{{action('Admin\EditNewsController@edit',['id'=>$commentItem->news_id])}}">{{$commentItem->news_title}}</a></td>
                                <td>{{$commentItem->date}}</td>
                                @if($commentItem->comment_status == 0)
                                    <td>تایید نشده</td>
                                @else
                                    <td>تایید شده</td>
                                @endif
                                <td class="actions">
                                    <form action="/admin/news/{{$commentItem->id}}/comment" method="POST">
                                        @csrf
                                        <button class='btn btn-primary button-next' type="submit">تایید کامنت <i
                                                class="fa fa-pencil"></i></button>
                                    </form>

                                    {!! Form::open(['url'=>'/admin/news/'.$commentItem->id.'/comment','method'=>'DELETE','class'=>'form-horizontal',
                                        'role'=>'form','onsubmit' => 'return confirm("آیا مطمئن هستید؟")'])!!}
                                    @csrf
                                    <button class='btn btn-primary button-next' id="deleteGradeX" type="submit">حذف
                                        <i class="fa fa-trash-o"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @else
                            <tr class="gradeC">
                                <td>{{$commentItem->name}}</td>
                                <td>{{$commentItem->email}}</td>
                                <td>{{$commentItem->comment}}</td>
                                <td><a href="{{action('Admin\EditNewsController@edit',['id'=>$commentItem->news_id])}}">{{$commentItem->news_title}}</a></td>
                                <td>{{$commentItem->date}}</td>
                                @if($commentItem->comment_status == 0)
                                    <td>تایید نشده</td>
                                @else
                                    <td>تایید شده</td>
                                @endif
                                <td class="actions">
                                    <form action="/admin/news/{{$commentItem->id}}/comment" method="POST">
                                        @csrf
                                        <button class='btn btn-primary button-next' type="submit">تایید کامنت <i
                                                class="fa fa-pencil"></i></button>
                                    </form>

                                    {!! Form::open(['url'=>'/admin/news/'.$commentItem->id.'/comment','method'=>'DELETE','class'=>'form-horizontal',
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
            </div>
        </div>
        <!-- end: panel body -->

    </div> <!-- content -->

    <footer class="footer">
        © xAdmin 2020
    </footer>

@endsection
