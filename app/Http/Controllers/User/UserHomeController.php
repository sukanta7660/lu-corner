<?php

namespace App\Http\Controllers\User;

use App\Blog;
use App\Blogcmt;
use App\Product;
use App\ProductComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $ckstatus = Product::where('status', 'accepted')->count();
        $count_blog = Blog::count();
        $accesories = Product::where('status', 'accepted')->orderBy('productID', 'DESC')->paginate(6);
        $blog = Blog::orderBy('blogID', 'DESC')->paginate(6);
        return view('user.userhome')->with(['accesories' => $accesories, 'ckstatus' => $ckstatus, 'user' => $user, 'blog' => $blog, 'count_blog' => $count_blog]);
    }

    public function single_product(Request $request)
    {
        $table = Product::find($request->id);
        $count_comnt = ProductComment::where('productID', $request->id)->count();
        $comment = ProductComment::orderBy('created_at', 'DESC')->where('productID', $request->id)->get();
        return view('user.singleproduct')->with(['table' => $table, 'comment' => $comment, 'count_comnt' => $count_comnt]);
    }

    public function blog_details(Request $request)
    {
        $table = Blog::find($request->id);
        $count_comnt = Blogcmt::where('blogID',$request->id)->count();
        $comment = Blogcmt::orderBy('created_at','DESC')->where('blogID',$request->id)->get();
        return view('user.blog_details')->with(['table' => $table,'count_comnt'=>$count_comnt,'comment'=>$comment]);
    }
}
