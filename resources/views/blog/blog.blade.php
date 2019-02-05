@extends('layouts.master')
@extends('box.blog.blog')
@section('title')
    Blog
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 btn_mod">
            <button class="btn btn-social btn-primary btn-flat" data-toggle="modal" data-target="#categoryModal">
                <i class="fa fa-plus"></i>
                Add New Post
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <table id="dataTable" class="table table-striped table-hover table-condensed table-bordered">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Descr.</th>
                        <th class="text-center">Edit</th>
                        <th class="text-right">Del</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                        <tr>
                            <td>{{$row->blogID}}</td>
                            <td>{{$row->category['name']}}</td>
                            <td>{{$row->title}}</td>
                            <td>{{$row->description}}</td>
                            <td class="text-center"><button
                                        data-id="{{$row->blogID}}"
                                        data-name="{{$row->title}}"
                                        data-blogcat="{{$row->blogcatID}}"
                                        data-des="{{$row->description}}"
                                        class="btn btn-xs btn-flat btn-success ediModal"  data-toggle="modal" data-target="#categoryEdiModal">Edit</button></td>
                            <td class="text-right"><a href="{{action('Blog\BlogController@del',['id'=>$row->blogID])}}" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('.ediModal').click(function () {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var blogcat = $(this).data('blogcat');
                var des = $(this).data('des');

                $('#ediProductForm [name=id]').val(id);
                $('#ediProductForm [name=name]').val(name);
                $('#ediProductForm [name=category]').val(blogcat);
                $('#ediProductForm [name=description]').val(des);

            });
        });
        $(function () {
            $('#dataTable').DataTable({
                "order": [[ 0, "DESC" ]],
                "iDisplayLength": 25,
                "columnDefs": [
                    { "orderable": false, "targets": [4,5]}//For Column Order
                ]
            });
        });



    </script>

@endsection