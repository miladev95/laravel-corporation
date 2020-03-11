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
                        <th>Title</th>
                        <th>Brief Description</th>
                        <th>Description</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 0;?>
                    @foreach($notification as $notifItem)
                        @if($counter % 2 == 0)
                            <tr class="gradeX">
                                <td>{{$notifItem->title}}</td>
                                <td>{{$notifItem->brief}}</td>
                                <td>{{$notifItem->description}}</td>
                                <td class="actions">
                                    {!! Form::open(['url'=>'/admin/notification/'.$notifItem->id,'method'=>'DELETE','class'=>'form-horizontal',
                                        'role'=>'form','onsubmit' => 'return confirm("Are you sure?")'])!!}
                                    @csrf
                                    <button class='btn btn-primary button-next' id="deleteGradeX" type="submit">Delete
                                        <i class="fa fa-trash-o"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @else
                            <tr class="gradeC">
                                <td>{{$notifItem->title}}</td>
                                <td>{{$notifItem->brief}}</td>
                                <td>{{$notifItem->description}}</td>
                                <td class="actions">
                                    {!! Form::open(['url'=>'/admin/notification/'.$notifItem->id,'method'=>'DELETE','class'=>'form-horizontal',
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
                <a href="{{url('/admin/notification/add')}}" class="btn btn-primary waves-effect waves-light">Add Notification</a>
            </div>
        </div>
        <!-- end: panel body -->

    </div> <!-- content -->

    <footer class="footer">
        © xAdmin 2020
    </footer>

@endsection
