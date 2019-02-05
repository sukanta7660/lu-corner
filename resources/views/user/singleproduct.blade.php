@extends('layouts.usermaster')
@section('title')
    {{$table->title}}
@endsection

@section('content')
    <section style="{{asset('public/userassets/images/background-image/test.jpg')}}" class="other_home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><a style="color: #fff;" href="{{action('User\UserHomeController@index')}}">Home</a>/ <span class="active text-danger">{{$table->title}}</span></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Single blog post -->
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-12">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-5">
							<img style="max-width: 100%;" src="{{asset('public/uploads/products/'.$table->image)}}" alt="image">
                        </div>
                        <div class="col-md-7">
                            <h4 class="card-title mb-0">{{$table->title}}</h4>
                            <small class="text-secondary"><strong>Posted by: &nbsp;</strong> {{$table->user['name']}}</small>
                            <p class="mt-3"><strong>Price:&nbsp;</strong>{{money($table->price)}}</p>
                            <p class="card-text">{{$table->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single blog post -->

        {{--Comment Section--}}
        <div class="row mt-5 mb-5">
            <div class="col-md-12">
                <div class="card card-body">
                    <h2>Leave a comment <small class="cmnt_nbr">{{$count_comnt}} &nbsp;<i class="fas fa-comment text-secondary"></i></small></h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            @if(isset(Auth::user()->email))
                            <form action="{{action('User\ProductCommentController@save')}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="productID" value="{{$table->productID}}">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="form-group col-md-10">
                                        <label for="comment">Comment</label>
                                        <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Write your comment..." required></textarea>
                                    </div>
                                    <div class="form-group col-md-2 submit_btn">
                                        <button type="submit" class="btn btn-sm btn-secondary no-border mt-5 form-control comment_btn" title="Comment"> Comment</button>
                                    </div>
                                </div>
                            </form>
                                @else
                            <h4 class="text-center"><span class="text-danger">If you want to comment you have to log in.</span> <a href="{{route('login')}}"><span class="text-success">Log In</span></a></h4>
                            @endif
                        </div>
                    </div>
                    <hr>
                    @foreach($comment as $row)
                    <div class="row mt-3 justify-content-md-center">
                        <div class="col-md-10">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        @if( $row->user['imageName'] == null )
                                        <img class="user_image" src="{{asset('public/profile/user/user.jpg')}}" alt="user image">
                                        @else
                                            <img class="user_image" src="{{asset('public/uploads/profile/user/'.$row->user['imageName'])}}" alt="user image">
                                        @endif
                                    </div>
                                    <div class="col-md-8">
                                        <h5 style="margin-bottom: 0; font-weight: bold" class="card-title">{{$row->user['name']}}</h5>
                                        <small class="text-secondary"> {{$row->created_at->format('F j, Y [ h:i a ]')}}</small>
                                        <p class="mt-1">{{$row->productcomment}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{--Comment Section--}}
    </div>
@endsection