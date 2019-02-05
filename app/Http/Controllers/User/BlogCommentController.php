<?php

namespace App\Http\Controllers\User;

use App\Blogcmt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCommentController extends Controller
{
    public function save(Request $request){
//        dd($request->all());
        $table = new Blogcmt();
        $table->blogID = $request->blogID;
        $table->comment = $request->comment;
        $table->save();

        return redirect()->back();
    }
}
