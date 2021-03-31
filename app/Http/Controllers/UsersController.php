<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    //code
    public function index() {
        $user =  Users::where('id',600)->first();

        return view('user.index', ['user' => $user]);
        //dd($user);
    }
}