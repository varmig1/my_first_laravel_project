<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\Auth;

class AuthController extends Controller
{
    public function example() {
        return view("example");
    }

    public function ShowRegister()
    {
        return view("Auth.register");
    }
}
