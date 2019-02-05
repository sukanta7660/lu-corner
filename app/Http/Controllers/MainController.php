<?php

namespace App\Http\Controllers;

use App\Product;
use App\Blog;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
		$product_count = Product::count();
		$blog_count = Blog::count();
        return view('main')->with(['product_count'=>$product_count,'blog_count'=>$blog_count]);
    }
}
