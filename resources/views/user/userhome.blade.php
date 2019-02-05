@extends('layouts.usermaster')
@section('title')
    Home
@endsection
@section('content')
    <!-- Home section starts -->
    <section style="background-image: url({{asset('public/userassets/images/background-image/test.jpg')}})" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="home-content">
                        <h1>A community to Build</h1>
                        <p>
							"One of the marvelous things about community is that it enables us to welcome and help people in a way we couldn't as individuals." – Jean Vanier
						</p>
                        
                    </div><!-- home content ends -->
                </div>
                <div class="col-md-5">
                    
                </div>
            </div>
        </div><!-- home container ends -->
    </section><!-- home section ends -->

    <!-- About section starts -->
    <section id="about" class="pt-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_heading mb-4 text-center">
                        <h2>Objective</h2>
                        <img src="{{asset('public/userassets/images/logo/2-line.png')}}" alt=""/>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about_content">
                        <p><b>LU-Corner is about to share things in easy way. It will help all LUians to make a great community, as all deparments people will be able to share their things in one place. Juniors will be helped by the resources that will be shared by their Seniors or Alumni. It is not only about share some objects but also share Knowledges as well by witting blogs. Moments and Tours can also be shared by the LU-Corner. A corner where all LUians will be altogther, is LU_Corner .</b></p>
                    </div>
                </div>
                <div class="offset-md-1 col-md-6">
                    <div class="about_image">
                        <img src="{{asset('public/userassets/images/about/about.jpg')}}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section Ends -->

    <!-- blog section starts -->
    <section id="blog" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_heading mb-4 text-center">
                        <h2>Latest Posts</h2>
                        <img src="{{asset('public/userassets/images/logo/2-line.png')}}" alt=""/>
                    </div>
                </div>
                @if( $ckstatus > 0 )
                @foreach($accesories as $row)
                <div class="col-md-4">
                    <div class="single_blog">
                        <div class="blog_img">
                            <img src="{{asset('public/uploads/products/'.$row->image)}}" alt=""/>
                        </div>
                        <p class="blog_title">{{$row->title}}</p>
                        <p>{{str_limit($row->description,100,'..')}}</p>
                        <a href="{{action('User\UserHomeController@single_product',['id'=>$row->productID])}}" class="blog_link">read more <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                @endforeach
                    <div class="col-md-12">
                        <a href="{{action('User\ProductController@index')}}" class="btn btn-sm btn-primary">see all <i class="fas fa-angle-right"></i></a>
                    </div>
                    @else
                    <div class="col-md-12">
                        <div class="card card-body text-center">
                            <h2 class="card-title">No Post Yet</h2>
                        </div>
                    </div>
                    @endif
            </div>
        </div><!-- blog container ends -->
    </section><!-- blog section ends -->

    <!-- Gallery section starts -->
    <section id="gallery" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_heading mb-4 text-center">
                        <h2>our gallery</h2>
                        <img src="{{asset('public/userassets/images/logo/2-line.png')}}" alt=""/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_gallery">
                        <a href="{{asset('public/userassets/images/gallery/2.jpg')}}" class="image-popup"><i class="fas fa-plus"></i>
                            <img src="{{asset('public/userassets/images/gallery/2.jpg')}}" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_gallery">
                        <a href="{{asset('public/userassets/images/gallery/4.jpg')}}" class="image-popup"><i class="fas fa-plus"></i>
                            <img src="{{asset('public/userassets/images/gallery/4.jpg')}}" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_gallery">
                        <a href="{{asset('public/userassets/images/gallery/3.jpg')}}" class="image-popup"><i class="fas fa-plus"></i>
                            <img src="{{asset('public/userassets/images/gallery/3.jpg')}}" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_gallery">
                        <a href="{{asset('public/userassets/images/gallery/1.jpg')}}" class="image-popup"><i class="fas fa-plus"></i>
                            <img src="{{asset('public/userassets/images/gallery/1.jpg')}}" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_gallery">
                        <a href="{{asset('public/userassets/images/gallery/5.jpg')}}" class="image-popup"><i class="fas fa-plus"></i>
                            <img src="{{asset('public/userassets/images/gallery/5.jpg')}}" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_gallery">
                        <a href="{{asset('public/userassets/images/gallery/6.jpg')}}" class="image-popup"><i class="fas fa-plus"></i>
                            <img src="{{asset('public/userassets/images/gallery/6.jpg')}}" alt=""/>
                        </a>
                    </div>
                </div>

            </div>
        </div><!-- gellery container ends -->
    </section><!-- gallery section ends -->

    <section id="blog" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_heading mb-4 text-center">
                        <h2>Our latest blogs</h2>
                        <img src="{{asset('public/userassets/images/logo/2-line.png')}}" alt=""/>
                    </div>
                </div>
                @if( $count_blog > 0 )
                    @foreach($blog as $row)
                        <div class="col-md-4">
                            <div class="single_blog">
                                <h2 class="blog_title text-info">{{$row->title}}</h2>
                                <p style="padding-top: 0;margin-bottom: -4px;"><small><strong>Posted by:&nbsp;</strong>{{$row->user['name']}}</small></p>
                                <p style="padding-top: 0;margin-bottom: -4px;"><small>{{$row->created_at->format('F j,Y [ h:i a ]')}}</small></p>
                                <p>{{str_limit($row->description,100,'..')}}</p>
                                <a href="{{action('User\UserHomeController@blog_details',['id'=>$row->blogID])}}" class="blog_link">read more <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-12">
                        <a href="{{action('User\BlogController@index')}}" class="btn btn-sm btn-primary">see all <i class="fas fa-angle-right"></i></a>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="card card-body text-center">
                            <h2 class="card-title">No Post Yet</h2>
                        </div>
                    </div>
                @endif
            </div>
        </div><!-- blog container ends -->
    </section><!-- blog section ends -->
@endsection