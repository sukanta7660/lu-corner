<?php

namespace App\Http\Controllers\Product;

use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{

//Page show
    public function index(){
    	$table =  ProductCategory::orderBy('categoryID','DESC')->get();
    	return view('product.category')->with(['table'=>$table]);
    }

//Category new entry
    public function save(Request $request){
    	$table = new ProductCategory();
    	$table->name = $request->name;
    	$table->save();
    	
    	return redirect()->back();

    }
//edit category
    public function edit(Request $request){
        $table = ProductCategory::find($request->id);
        $table->name = $request->name;
        $table->save();

        return redirect()->back();
    }

//Category Del
    public function del($id){
    	$table =  ProductCategory::find($id);
    	$table->delete();
    	return redirect()->back();

    }
}
