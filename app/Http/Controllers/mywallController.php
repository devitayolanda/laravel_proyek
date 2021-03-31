<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mywallController extends Controller
{
    //
    public function index(){
        return view('user.mywall');
    }
}
