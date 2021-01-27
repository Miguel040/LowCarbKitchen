<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login'); 
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]); 

        $needsforlogin = $request->only('email','password'); 

        if(Auth::attempt($needsforlogin))
        {
            $request->session()->regenerate();
            return redirect()->route('home'); 
        }

        return back()->withErrors([
            'email' => 'Deine Email Adreesse gibt es nicht.',
        ]); 
    }
}
