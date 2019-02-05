<?php

namespace App\Http\Controllers\Blog;

use App\Blog;
use App\Blogcat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //show page
    public function index(){
        $cat = Blogcat::orderBy('name','ASC')->get();
        $table = Blog::orderBy('blogID','DESC')->get();
        return view('blog.blog')->with(['table'=>$table,'cat'=>$cat]);
    }

    // save post

    public  function save(Request $request){
        $table = new Blog();
        $table->blogcatID = $request->category;
        $table->title = $request->name;
        $table->description = $request->description;
        $table->save();

        return redirect()->back();
    }

    //edit post

    public function edit(Request $request){
        $table = Blog::find($request->id);

        $table->blogcatID = $request->category;
        $table->title = $request->name;
        $table->description = $request->description;
        $table->save();

        return redirect()->back();
    }

    //delete post
    public function del($id){
        $table =  Blog::find($id);
        $table->delete();
        return redirect()->back();

    }
}
