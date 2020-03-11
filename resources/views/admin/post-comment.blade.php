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
                        <th>Name</th>
                        <th>Image</th>
                        <th>Comment</th>
                        <th>Post Title</th>
                        <th>Date</th>
                        <th>Comment Status</th>
                        <th>Operations</th>
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
                                <td>
                                    <a href="{{action('Admin\EditPostController@edit',['id'=>$commentItem->post_id])}}">{{$commentItem->post_title}}</a>
                                </td>
                                <td>{{$commentItem->date}}</td>
                                @if($commentItem->comment_status == 0)
                                    <td>Not Confirmed</td>
                                @else
                                    <td>Confirmed</td>
                                @endif
                                <td class="actions">
                                    @if($commentItem->comment_status == 0)
                                        <form action="/admin/post/{{$commentItem->id}}/comment" method="POST">
                                            @csrf
                                            <button class='btn btn-primary button-next' type="submit">Confirm <i
                                                    class="fa fa-pencil"></i></button>
                                        </form>
                                    @endif

                                    {!! Form::open(['url'=>'/admin/post/'.$commentItem->id.'/comment','method'=>'DELETE','class'=>'form-horizontal',
                                        'role'=>'form','onsubmit' => 'return confirm("Are you sure?")'])!!}
                                    @csrf
                                    <button class='btn btn-primary button-next' id="deleteGradeX" type="submit">Delete
                                        <i class="fa fa-trash-o"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @else
                            <tr class="gradeC">
                                <td>{{$commentItem->name}}</td>
                                <td>{{$commentItem->email}}</td>
                                <td>{{$commentItem->comment}}</td>
                                <td>
                                    <a href="{{action('Admin\EditPostController@edit',['id'=>$commentItem->post_id])}}">{{$commentItem->post_title}}</a>
                                </td>
                                <td>{{$commentItem->date}}</td>
                                @if($commentItem->comment_status == 0)
                                    <td>Not Confirmed</td>
                                @else
                                    <td>Confirmed</td>
                                @endif
                                <td class="actions">
                                    @if($commentItem->comment_status == 0)
                                        <form action="/admin/post/{{$commentItem->id}}/comment" method="POST">
                                            @csrf
                                            <button class='btn btn-primary button-next' type="submit">Confirm <i
                                                    class="fa fa-pencil"></i></button>
                                        </form>
                                    @endif
                                    {!! Form::open(['url'=>'/admin/post/'.$commentItem->id.'/comment','method'=>'DELETE','class'=>'form-horizontal',
                                        'role'=>'form','onsubmit' => 'return confirm("Are you sure?")'])!!}
                                    @csrf
                                    <button class='btn btn-primary button-next' id="deleteGradeX" type="submit">Delete
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
