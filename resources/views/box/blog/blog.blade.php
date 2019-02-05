@section('box')

    <div id="categoryModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add New Post</h4>
                </div>
                <form action="{{action('Blog\BlogController@save')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {!! csrf_field() !!}
                    <div class="modal-body">

                        <div class="input-group">
                            <span class="input-group-addon">Category</span>
                            <select name="category" class="form-control" required>
                                <option value="">Select a Category</option>
                                @foreach($cat as $row)
                                    <option value="{{$row->blogcatID}}">
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
                            <span class="input-group-addon">Description</span>
                            <textarea name="description" class="form-control" placeholder="Description"  cols="4" rows="6" required></textarea>
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
                <form id="ediProductForm" action="{{action('Blog\BlogController@edit')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id">

                    <div class="modal-body">

                        <div class="input-group">
                            <span class="input-group-addon">Category</span>
                            <select name="category" class="form-control" required>
                                <option value="">Select a Category</option>
                                @foreach($cat as $row)
                                    <option value="{{$row->blogcatID}}">
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
                            <span class="input-group-addon">Description</span>
                            <textarea name="description" class="form-control" placeholder="Description"  cols="4" rows="6" required></textarea>
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

@endsection