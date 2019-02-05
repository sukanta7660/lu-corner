<?php

namespace App\Http\Controllers\Blog;

use App\Blogcat;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    //show  page
    public function index()
    {
    	$table = Blogcat::orderBy('blogcatID','DESC')->get();
    	return view('blog.blogcat')->with(['table' => $table]);

    }
    //save category
    public function save(Request $request)
    {
    	$table = new Blogcat();
    	$table->name = $request->name;
    	$table->save();

    	return redirect()->back();

    }
    //edit category
    public function edit(Request $request){
        $table = Blogcat::find($request->id);
        $table->name = $request->name;
        $table->save();

        return redirect()->back();
    }
     public function del($id)
    {
    	$table =  Blogcat::find($id);
    	$table->delete();

    	return redirect()->back();

    }


}
