<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function singup(){
        return view("singup.index");
    }
    public function singin(){
        return view("singin.index");
    }
}
