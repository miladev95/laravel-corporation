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
            <div class="editable-responsive">
                <table class="table table-striped" id="datatable-editable">
                    <thead>
                    <tr>
                        <th>عنوان</th>
                        <th>منوی پدر</th>
                        <th>تصویر</th>
                        <th>ایکن</th>
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
                                <td>{{$menuItem->parent}}</td>
                                <td>{{$menuItem->image}}</td>
                                <td>{{$menuItem->icon}}</td>
                                <td>{{$menuItem->link}}</td>
                                <td class="actions">
                                    <form action="/admin/menu/?id={{$menuItem->id}}" method="post">
                                        @method('PATCH')
                                        @csrf
                                        <button class='btn btn-primary button-next' type="submit">ویرایش <i
                                                class="fa fa-pencil"></i></button>
                                    </form>
                                    <form action="/admin/menu/?id={{$menuItem->id}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class='btn btn-primary button-next' id="delete" type="submit">حذف <i
                                                class="fa fa-trash-o"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @else
                            <tr class="gradeC">
                                <td>{{$menuItem->title}}</td>
                                <td>{{$menuItem->parent}}</td>
                                <td>{{$menuItem->image}}</td>
                                <td>{{$menuItem->icon}}</td>
                                <td>{{$menuItem->link}}</td>
                                <td class="actions">
                                    <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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
        © xAdmin 2019
    </footer>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

@endsection
@section('custom_scripts')
    <script>
        document
            .getElementById("delete")
            .addEventListener("click", function( e ){ //e => event
                if( ! confirm("آیا مطمئن هستید؟") ){
                    e.preventDefault();
                }
            });
    </script>
@endsection
