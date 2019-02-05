@section('box')

<div id="categoryModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add New Product</h4>
                </div>
                <form action="{{action('Product\ProductController@save')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {!! csrf_field() !!}
                    <div class="modal-body">

                        <div class="input-group">
                            <span class="input-group-addon">Category</span>
                            <select name="category" class="form-control" required>
                                <option value="">Select a Category</option>
                                @foreach($cat as $row)
                                <option value="{{$row->categoryID}}">
                                    {{$row->name}}
                                </option>
                                @endforeach
                            </select>
                        </div><br/>

                        <div class="input-group">
                            <span class="input-group-addon">Department</span>
                            <select name="dept" class="form-control" required>
                                <option value="">Select a Department</option>
                                @foreach($dept as $row)
                                <option value="{{$row->departmentID}}">
                                    {{$row->name}}
                                </option>
                                @endforeach
                            </select>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Title</span>
                            <input name="name" class="form-control" placeholder="Accesories Title" type="text" required>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Price</span>
                            <input name="price" class="form-control" placeholder=" price" type="number" min="0" value="0" required>
                        </div><br/>

                        <div class="input-group">
                            <span class="input-group-addon">Description</span>
                            <textarea name="description" class="form-control" placeholder="Description"  cols="4" rows="6"></textarea>
                        </div><br/>
                        <div class="input-group">
                            <span class="input-group-addon">Image</span>
                            <input style="padding-bottom: 40px;" name="image" class="form-control" type="file">
                        </div><br/>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

<div id="categoryEdiModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Edit Product</h4>
            </div>
            <form id="ediProductForm" action="{{action('Product\ProductController@edit')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                {!! csrf_field() !!}
                <input type="hidden" name="id">

                <div class="modal-body">

                    <div class="input-group">
                        <span class="input-group-addon">Category</span>
                        <select name="category" class="form-control" required>
                            <option value="">Select a Category</option>
                            @foreach($cat as $row)
                                <option value="{{$row->categoryID}}">
                                    {{$row->name}}
                                </option>
                            @endforeach
                        </select>
                    </div><br/>

                    <div class="input-group">
                        <span class="input-group-addon">Department</span>
                        <select name="dept" class="form-control" required>
                            <option value="">Select a Department</option>
                            @foreach($dept as $row)
                                <option value="{{$row->departmentID}}">
                                    {{$row->name}}
                                </option>
                            @endforeach
                        </select>
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon">Title</span>
                        <input name="name" class="form-control" placeholder="Accesories Title" type="text" required>
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon">Price</span>
                        <input name="price" class="form-control" placeholder=" price" type="number" min="0" value="0" required>
                    </div><br/>

                    <div class="input-group">
                        <span class="input-group-addon">Description</span>
                        <textarea name="description" class="form-control" placeholder="Description"  cols="4" rows="6" required></textarea>
                    </div><br/>

                    <div class="input-group">
                        <span class="input-group-addon">Image</span>
                        <input style="padding-bottom: 40px;" name="image" id="inputFile" class="form-control" type="file">
                    </div><br/>
                    <div class="text-center">
                        <img class="img-thumbnail preview" src="{{asset('public/uploads/products/'.$row->image)}}" style="height: 150px;" alt="Product image">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@endsection