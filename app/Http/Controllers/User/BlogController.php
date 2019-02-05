<?php

namespace App\Http\Controllers\User;

use App\Blog;
use App\Blogcat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $blog_cat = Blogcat::orderBy('blogcatID','ASC')->get();
        return view('user.blog')->with(['blog_cat'=>$blog_cat]);
    }
    public function blog_cat($id){
        $table = Blog::where('blogcatID',$id)->get();
        return response()->json($table);
    }
    public function all_blog(){
        $table = Blog::orderBy('title', 'ASC')->get();
        return response()->json($table);
    }
}
