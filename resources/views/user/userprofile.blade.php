@extends('layouts.usermaster')
@section('title')
    {{$user->name}}
@endsection

@section('content')
    <section style="{{asset('public/userassets/images/background-image/test.jpg')}}" class="other_home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><a style="color: #fff;" href="{{action('User\UserHomeController@index')}}">Home</a>/ <span class="active">Profile</span></p>
                </div>
            </div>
        </div>
    </section>
<div class="container-fluid pl-0">
   <div class="profile_main">
       <div class="row">
           <div class="col-md-2">
               <div class="profile_side">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="profile_picture">
                               <div class="profile-img">
							   @if( $user->imageName != null )
                                   <img src="{{asset('public/uploads/profile/user/'.$user->imageName)}}" alt="profile picture"/>
							   @else
								   <img class="user_image" src="{{asset('public/profile/user/user.png')}}" alt="user image">
							   @endif
                               </div>
                               <div class="profile_info">
                                   <h1 class="profile_name">
                                       <span class="p-name">{{$user->name}}</span>
                                   </h1>
                                   <p class="user_dept"><i class="fas fa-home"></i>&nbsp;
                                       @if($user->dept!=null)
                                       {{$user->dept}}
                                           @else
                                       Add department
                                       @endif
                                   </p>
                                   <p class="address_user"><i class="fas fa-envelope"></i>&nbsp; {{$user->email}}</p>
                                   <p class="link_web"><i class="fas fa-link"></i>&nbsp; <a href="{{$user->website}}" class="text-primary">{{str_limit($user->website,25,'..')}}</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-12">
                           <button style="width: 100%;padding: 0px 0;margin-top: 10px; font-size: 13px;" type="button" class="btn btn-green" data-toggle="collapse" title="edit profile" data-target="#editprofile">Edit Profile</button>

                           <div id="editprofile" class="collapse">
                               <form action="{{action('User\UserProfileController@update')}}" class="mt-3 text-center" method="post" enctype="multipart/form-data">
                                   {{csrf_field()}}
                                   <input type="hidden" name="id" value="{{$user->id}}">
                                   <div class="form-group row justify-content-md-center mb-1">
                                       <div class="col-sm-10">
                                           <input value="{{$user->name}}" name="name" type="text" class="form-control form-control-sm"  placeholder="name">
                                       </div>
                                   </div>
                                   <div class="form-group row justify-content-md-center mb-1">
                                       <div class="col-sm-10">
                                           <input value="{{$user->dept}}" name="dept" type="text" class="form-control form-control-sm"  placeholder="department">
                                       </div>
                                   </div>
                                   <div class="form-group row justify-content-md-center mb-1">
                                       <div class="col-sm-10">
                                           <input value="{{$user->stdID}}" name="stdID" type="text" class="form-control form-control-sm"  placeholder="student id">
                                       </div>
                                   </div>
                                   <div class="form-group row justify-content-md-center mb-1">
                                       <div class="col-sm-10">
                                           <input value="{{$user->website}}" name="website" type="text" class="form-control form-control-sm"  placeholder="website link">
                                       </div>
                                   </div>
                                   <div class="form-group row justify-content-md-center mb-1">
                                       <div class="col-sm-10">
                                           <input value="{{$user->email}}" name="email" type="email" class="form-control form-control-sm"  placeholder="email">
                                       </div>
                                   </div>
                                   <div class="form-group row justify-content-md-center mb-1">
                                       <div class="col-sm-10">
                                           <input style="padding-top: 0;" name="imageName" type="file" class="form-control form-control-sm">
                                       </div>
                                   </div>
                                   <div class="form-group row justify-content-md-center mb-1">
                                       <div class="col-sm-10">
                                           <button type="submit" style="padding: 0;font-size: 13px;" class="btn btn-primary form-control form-control-sm" value="Save Changes">Save Changes</button>
                                       </div>
                                   </div>
                               </form>
                           </div>

                       </div>
                   </div>
                   <hr>
               </div>
               <div class="sidebar_profile">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="sidebar_content">
                               <div class="tab">
                                   <button type="button" class="tablinks list-group-item pt-1 pb-1 list-group-item-action btn btn-secondary" disabled>Content</button>
                                   <button type="button" class="tablinks list-group-item list-group-item-action" >&nbsp;</button>
                                   <button type="button" class="tablinks list-group-item list-group-item-action" onclick="openContent(event, 'accessories')" id="defaultOpen">Accessories &nbsp; ({{$product_count}})</button>
                                   <button type="button" class="tablinks list-group-item list-group-item-action" onclick="openContent(event, 'blog')">Blog &nbsp; ({{$blog_count}})</button>
                                   <button type="button" class="tablinks list-group-item list-group-item-action" >&nbsp;</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-10">
               <div id="accessories" class="tabcontent">
                   <div class="container">
                       {{--Comment Section--}}
                       <div class="row mt-5 mb-5">
                           <div class="col-md-12">
                               <div class="card card-body">
                                   <h2>Your Post</h2>
                                   <hr>
                                   <div class="row">
                                       <div class="col-md-12">
                                           <form action="{{action('User\UserProfileController@save_accessories')}}" method="post" enctype="multipart/form-data">
                                               {{--<input type="hidden" name="productID" value="{{$table->productID}}">--}}
                                               {{csrf_field()}}
                                               <div class="row">
                                                   <div class="form-group col-md-6">
                                                       <label for="category">Category</label>
                                                       <select class="form-control" name="categoryID" id="category" required>
                                                           <option value="">Select a category</option>
                                                           @foreach($category as $row)
                                                               <option value="{{$row->categoryID}}">{{$row->name}}</option>
                                                            @endforeach
                                                       </select>
                                                   </div>
                                                   <div class="form-group col-md-6">
                                                       <label for="deptID">Department</label>
                                                       <select class="form-control" name="deptID" id="deptID" required>
                                                           <option value="">Select a department</option>
                                                           @foreach($department as $row)
                                                               <option value="{{$row->departmentID}}">{{$row->name}}</option>
                                                           @endforeach
                                                       </select>
                                                   </div>
                                                   <div class="form-group col-md-6">
                                                       <label for="title">Title</label>
                                                       <input type="text" class="form-control" placeholder="Enter the title..." name="title" id="title" required>
                                                   </div>
                                                   <div class="form-group col-md-6">
                                                       <label for="price">Price</label>
                                                       <input type="number" class="form-control" name="price" id="price" value="0" min="0">
                                                   </div>
                                                   <div class="form-group col-md-6">
                                                       <label for="image">Image</label>
                                                       <input type="file" class="form-control image_upload" name="image" id="image">
                                                   </div>
                                                   <div class="form-group col-md-6">
                                                       <label for="description">Description</label>
                                                       <textarea class="form-control" name="description" id="description" rows="3" placeholder="Write about the accessory..." required></textarea>
                                                   </div>
                                               </div>
                                               <div class="row">
                                                   <div class="col-md-9"></div>
                                                   <div class="form-group col-md-3 submit_btn">
                                                       <button type="submit" class=" btn btn-sm btn-primary no-border form-control" title="post"> Post</button>
                                                   </div>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       {{--Comment Section--}}
                       @foreach($product as $row)
                       <div class="row mt-3 justify-content-md-center">
                           <div class="col-md-10">
                               <div class="card card-body">
                                   <div class="row">
                                       <div class="col-md-2">
                                               <img class="user_image" src="{{asset('public/uploads/products/'.$row->image)}}" alt="Product">
                                       </div>
                                       <div class="col-md-8">
                                           <h3 style="margin-bottom: 0; font-weight: bold" class="card-title">{{$row->title}}</h3>
                                           <small class="text-secondary"> {{$row->created_at->format('F j, Y [ h:i a ]')}}</small>
                                           <p class="text-secondary"><strong>Price: &nbsp;</strong> {{money($row->price)}} &nbsp; &nbsp; &nbsp; <strong>Department:</strong> &nbsp; {{$row->department['name']}}</p>
                                           <p class="mt-1">{{str_limit($row->description,300,'..')}}</p>
                                           <a href="{{action('User\UserHomeController@single_product',['id'=>$row->productID])}}" class="blog_link">read more <i class="fas fa-angle-right"></i></a>
                                           <a href="#" data-toggle="collapse" title="edit product" data-target="#editproduct{{$row->productID}}"
                                              style="position: absolute;right: 42%;" class="blog_link editoggle">edit</a>
                                           <a style="position: absolute; right: 0%;" href="{{action('User\UserProfileController@del',['id'=>$row->productID])}}" class="blog_link del">delete</a>
                                           </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                    @endforeach
                       <div class="row mt-3 justify-content-md-center">
                           <div class="col-md-10">
                               {{$product->links()}}
                           </div>
                       </div>
                   </div>
               </div>

               <div id="blog" class="tabcontent">
                   <div class="container">
                       {{--Comment Section--}}
                       <div class="row mt-5 mb-5">
                           <div class="col-md-12">
                               <div class="card card-body">
                                   <h2>Post a new blog</h2>
                                   <hr>
                                   <div class="row">
                                       <div class="col-md-12">
                                           <form action="{{action('User\UserProfileController@store_blog')}}" method="post" enctype="multipart/form-data">
                                               {{--<input type="hidden" name="productID" value="{{$table->productID}}">--}}
                                               {{csrf_field()}}
                                               <div class="row">
                                                   <div class="form-group col-md-6">
                                                       <label for="blogcat">Category</label>
                                                       <select class="form-control" name="blogcatID" id="blogcat" required>
                                                           <option value="">Select a category</option>
                                                           @foreach($blog_cat as $row)
                                                            <option value="{{$row->blogcatID}}">{{$row->name}}</option>
                                                           @endforeach
                                                       </select>
                                                   </div>
                                                   <div class="form-group col-md-6">
                                                       <label for="blogtitle">Title</label>
                                                       <input type="text" class="form-control" placeholder="Enter the title..." name="title" id="blogtitle" required>
                                                   </div>
                                                   <div class="form-group col-md-6">
                                                       <label for="description">Description</label>
                                                       <textarea class="form-control" name="description" id="description" rows="3" placeholder="Write  the blog..." required></textarea>
                                                   </div>
                                               </div>
                                               <div class="row">
                                                   <div class="col-md-9"></div>
                                                   <div class="form-group col-md-3 submit_btn">
                                                       <button type="submit" class=" btn btn-sm btn-primary no-border form-control" title="post"> Post your blog</button>
                                                   </div>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       {{--Comment Section--}}
                       @foreach($blogs as $row)
                           <div class="row mt-3 justify-content-md-center">
                               <div class="col-md-10">
                                   <div class="card card-body">
                                       <div class="row">
                                           <div class="col-md-12">
                                               <h3 style="margin-bottom: 0; font-weight: bold" class="card-title">{{$row->title}}</h3>
                                               <small class="text-secondary"> {{$row->created_at->format('F j, Y [ h:i a ]')}}</small>
                                               <p class="text-secondary"><strong>Category: &nbsp;&nbsp;</strong> {{$row->category['name']}}</p>
                                               <p class="mt-1">{{str_limit($row->description,300,'..')}}</p>
                                               <a href="{{action('User\UserHomeController@blog_details',['id'=>$row->blogID])}}" class="blog_link">read more <i class="fas fa-angle-right"></i></a>
                                               <a style="position: absolute; right: 4%;" href="{{action('User\UserProfileController@del_blog',['id'=>$row->blogID])}}" class="blog_link del">delete</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       @endforeach
                       <div class="row mt-3 justify-content-md-center">
                           <div class="col-md-10">
                               {{$blogs->links()}}
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        // $(function () {
        //     $('.editoggle').click(function () {
        //         var id = $(this).data('id');
        //         var title = $(this).data('title');
        //         var price = $(this).data('price');
        //         var category = $(this).data('category');
        //         var dept = $(this).data('dept');
        //         var des = $(this).data('dept');
        //
        //         $('#editproduct [name=id]').val(id);
        //         $('#editproduct [name=title]').val(title);
        //         $('#editproduct [name=price]').val(price);
        //         $('#editproduct [name=categoryID]').val(category);
        //         $('#editproduct [name=deptID]').val(dept);
        //         $('#editproduct [name=description]').val(des);
        //
        //     });
        // });

        function openContent(evt, userPost) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(userPost).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endsection
