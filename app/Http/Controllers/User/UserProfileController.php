<?php

namespace App\Http\Controllers\User;

use App\Blog;
use App\Blogcat;
use App\Departments;
use App\Product;
use App\ProductCategory;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $product_count = Product::where('userID',$user->id)->count();
        $blog_count = Blog::where('userID',$user->id)->count();
        $product = Product::orderBy('created_at','DESC')->where('userID',$user->id)->paginate(10);
        $blogs = Blog::orderBy('created_at','DESC')->where('userID',$user->id)->paginate(10);
        $category = ProductCategory::orderBy('name','ASC')->get();
        $blog_cat = Blogcat::orderBy('name','ASC')->get();
        $department = Departments::orderBy('name','ASC')->get();
        return view('user.userprofile')->with(['category'=>$category, 'department'=>$department,'user'=>$user,'product'=>$product,'product_count'=>$product_count,'blog_cat'=>$blog_cat,'blog_count'=>$blog_count,'blogs'=>$blogs]);
    }
//user product post
    public function save_accessories(Request $request){
//        dd($request->all());
        $table = new Product();
        $table->categoryID = $request->categoryID;
        $table->departmentID = $request->deptID;
        $table->title = $request->title;
        $table->price = $request->price;
        $table->description = $request->description;

        //image upload
        if ($request->hasFile('image')) {

            $extnshon = $request->image->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extnshon;

            $table->image = $filename;

            $request->image->move('public/uploads/products',$filename);
        }

        $table->save();

        return redirect()->back();
    }
//user blog post
        public function store_blog(Request $request){
            $table = new Blog();
            $table->blogcatID = $request->blogcatID;
            $table->title = $request->title;
            $table->description = $request->description;
            $table->save();
            return redirect()->back();

        }

        //user frofile update
        public function update(Request $request){
//              dd($request->all());
                $table = User::find($request->id);
                $table->name = $request->name;
                $table->email = $request->email;
                $table->dept = $request->dept;
                $table->stdID = $request->stdID;
                $table->website = $request->website;

                //image upload
                if ($request->hasFile('imageName')) {

                    $extnshon = $request->imageName->extension();
                    $filename =  md5(date('Y-m-d H:i:s'));
                    $filename = $filename.'.'.$extnshon;

                    $table->imageName = $filename;

                    $request->imageName->move('public/uploads/profile/user',$filename);
                }

                $table->save();

                return redirect()->back();
        }

        //edit product
        public function edit_product(Request $request){
        //dd($request->all());
        $table = Product::find($request->productID);
            $table->categoryID = $request->categoryID;
            $table->departmentID = $request->deptID;
            $table->title = $request->title;
            $table->price = $request->price;
            $table->description = $request->description;

            //image upload
            if ($request->hasFile('image')) {

                $extnshon = $request->image->extension();
                $filename =  md5(date('Y-m-d H:i:s'));
                $filename = $filename.'.'.$extnshon;

                $table->image = $filename;

                $request->image->move('public/uploads/products',$filename);
            }

            $table->save();

            return redirect()->back();

        }
		
		//post del
		public function del($id){
			$table =  Product::find($id);
			$table->delete();
			
			return redirect()->back();
		
		}
		//blog del
		public function del_blog($id){
			$table =  Blog::find($id);
			$table->delete();
			
			return redirect()->back();
		}
}
