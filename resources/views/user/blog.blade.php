@extends('layouts.usermaster')
@section('title')
    Blogs
@endsection
@section('content')
    <section style="{{asset('public/userassets/images/background-image/bg-2.jpg')}}" class="other_home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><a style="color: #fff;" href="{{action('User\UserHomeController@index')}}">Home</a>/ <span class="text-danger">Blog</span></p>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid pl-0">
        <div class="profile_main">
            <div class="row">
                <div class="col-md-2">
                    <div class="row no-gutters mb-2">
                        <div class="col">
                            <input class="form-control border-secondary border-right-0 rounded-0" type="search" placeholder="search" id="example-search-input4">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="list-group">
                        <p href="#" class="list-group-item list-group-item-action active pt-1 pb-1">
                            Category
                        </p>

                        <ul style="list-style: none" id="category">
                            @foreach($blog_cat as $row)
                                <li class="list-group-item list-group-item-action">
                                    <a href="{{action('User\BlogController@blog_cat',[$row->blogcatID])}}"  class="text-black">{{$row->name}}</a>
                                </li>
                            @endforeach
                        </ul>



                    </div>
                </div>
                <div class="col-md-10">
                    <section id="blog" class="pt-5 pt-5 pb-5">
                        <div class="container">
                            <div class="row" id="blogShow">

                            </div>
                        </div><!-- blog container ends -->
                    </section><!-- blog section ends -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

    <script type="text/javascript">
        $(function () {
            contents("{{action('User\BlogController@all_blog')}}");
            $('#category li a').click(function (e) {
                e.preventDefault();
                var url = $(this).attr('href');
                contents(url);
            });
        });



        function contents(url) {
            $.get(url, function(result){
                var show_data = '';
                $.each(result, function( i, row ) {
                    show_data += '<div class="col-md-4">\n' +
                        '                            <div class="single_blog">\n' +
                        '                                <h2 class="blog_title text-info">'+row.title+'</h2>\n' +
                        '                                <p><small>'+row.description.substr(0,200)+'...'+'</small></p>\n' +
                        '                                <a href="{{action('User\UserHomeController@blog_details')}}?id='+row.blogID+'" class="blog_link">read more <i class="fas fa-angle-right"></i></a>\n' +
                        '                            </div>\n' +
                        '                        </div>'
                });

                $('#blogShow').html(show_data);
            });
        }

    </script>

@endsection