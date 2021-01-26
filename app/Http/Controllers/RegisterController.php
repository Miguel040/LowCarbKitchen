<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
 public function index()
 {
     return view('auth.register'); 
 }

 public function store(Request $request)
 {
   $this->validate($request,[
        'name'=> 'required',
        'username'=> 'required',
        'email'=> 'required',
        'password'=> 'required|min:6|confirmed',
   ]);

   User::create([
        'name' => $request->name,
        'username' => $request->name,
        'email' => $request->name,
        'password' => Hash::make($request->password),
   ]); 
 }
}

