<?php

namespace App\Http\Controllers\Department;

use App\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
	public function index()
	{
		$table = Departments::orderBy('departmentID','DESC')->get();
    	return view('department.department')->with(['table' => $table]);
	}
//new department
    public function save(Request $request)
    {
    	$table = new Departments();
    	$table->name = $request->name;
    	$table->save();

    	return redirect()->back();
    }
//edit category
    public function edit(Request $request){
        $table = Departments::find($request->id);
        $table->name = $request->name;
        $table->save();

        return redirect()->back();
    }
//delete department
     public function del($id)
     {
    	$table =  Departments::find($id);
    	$table->delete();
    	return redirect()->back();

    }
}
