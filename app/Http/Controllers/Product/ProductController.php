<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Departments;
use App\Product;
use App\ProductCategory;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //Page show
    public function index(){
    	$cat =  ProductCategory::orderBy('categoryID','DESC')->get();
    	$dept = Departments::orderBy('departmentID','DESC')->get();
    	$table =  Product::orderBy('productID','DESC')->get();
    	return view('product.product')->with(['table'=>$table,'cat'=>$cat,'dept'=>$dept]);
    }
    //save product
    public function save(Request $request){
    	$table = new Product();
    	$table->categoryID = $request->category;
    	$table->departmentID = $request->dept;
    	$table->title = $request->name;
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
    //product edit
    public function edit(Request $request){
        $table = Product::find($request->id);
        $table->categoryID = $request->category;
        $table->departmentID = $request->dept;
        $table->title = $request->name;
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

    //approved
    public function accept(Request $request){
        $table= Product::find($request->id);
        $table->status = 'accepted';
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }

    //Product Del
    public function del($id){
    	$table =  Product::find($id);
    	$table->delete();
    	return redirect()->back();

    }
}
