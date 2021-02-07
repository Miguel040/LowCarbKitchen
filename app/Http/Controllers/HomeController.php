<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index()
    {
     /*    $recipes = Recipes::get() */
    
       /*  $recipes = Recipes::latest()->get()->paginate(3);  */

       $recipes = Recipes::orderBy('created_at' , 'desc')->paginate(3); 


        return view('home', [
            'recipes' => $recipes

        ]);

    
    }
}

       
  
