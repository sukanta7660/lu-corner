<?php

namespace App\Http\Controllers\User;

use App\ProductComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCommentController extends Controller
{
    public function save(Request $request){
//        dd($request->all());
        $table = new ProductComment();
        $table->productID = $request->productID;
        $table->productcomment = $request->comment;
        $table->save();

        return redirect()->back();
    }
}
