<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function index(){
        auth()->logout();
        return redirect('/');
    }
}
