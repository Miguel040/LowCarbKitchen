<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login'); 
    }
}
