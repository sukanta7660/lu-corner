@extends('layouts.master')
@extends('box.product.product')

@section('title')
Product
@endsection

@section('content')
<div class="row">
        <div class="col-md-6 btn_mod">
            <button class="btn btn-social btn-primary btn-flat" data-toggle="modal" data-target="#categoryModal">
                <i class="fa fa-plus"></i>
                Add New Product
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
                        <th>Dept.</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th class="text-center">Edit</th>
                        <th class="text-right">Del</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($table as $row)
                        <tr>
                            <td>{{$row->productID}}</td>
                            <td>{{$row->poductcat['name']}}</td>
                            <td>{{$row->department['name']}}</td>
                            <td>{{$row->title}}</td>
                            <td>{{money($row->price)}}</td>
                            <td>
                            @if($row->status == 'pending')
                                <a class="btn btn-xs btn-flat btn-warning" onclick="alert('Are you sure to Apprroved?')"  href="{{action('Product\ProductController@accept', ['id' => $row->productID])}}">Pending</a>
                                @elseif($row->status == 'accepted')
                                <button class="btn btn-xs btn-flat btn-primary">Accepted</button>
                            @endif
                            </td>
                            <td class="text-center"><button
                                        data-id="{{$row->productID}}"
                                        data-name="{{$row->title}}"
                                        data-procat="{{$row->categoryID}}"
                                        data-price="{{$row->price}}"
                                        data-des="{{$row->description}}"
                                        data-dept="{{$row->departmentID}}"
                                        data-img="{{asset('public/uploads/products/'.$row->image)}}"
                                        class="btn btn-xs btn-flat btn-success ediModal"  data-toggle="modal" data-target="#categoryEdiModal">Edit</button></td>
                            <td class="text-right"><a href="{{action('Product\ProductController@del', ['id' => $row->productID])}}" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a></td>
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
                var procat = $(this).data('procat');
                var price = $(this).data('price');
                var des = $(this).data('des');
                var dept = $(this).data('dept');
                var img = $(this).data('img');

                $('#ediProductForm [name=id]').val(id);
                $('#ediProductForm [name=name]').val(name);
                $('#ediProductForm [name=category]').val(procat);
                $('#ediProductForm [name=price]').val(price);
                $('#ediProductForm [name=dept]').val(dept);
                $('#ediProductForm [name=description]').val(des);
                $('#ediProductForm img').attr('src',img);

            });
        });
        //image Preview
        $(function () {
            $("#inputFile").change(function () {
                imgPrev(this , '.preview');
            });
        });
        $(function () {
            $('#dataTable').DataTable({
                "order": [[ 0, "DESC" ]],
                "iDisplayLength": 25,
                "columnDefs": [
                    { "orderable": false, "targets": [6,7]}//For Column Order
                ]
            });
        });



    </script>

@endsection