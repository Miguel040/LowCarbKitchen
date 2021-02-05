<?php

namespace App\Http\Controllers\recipes;

use App\Http\Controllers\Controller;
use App\Models\NewRecipe;
use Illuminate\Http\Request;

class NewRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recipes.newrecipe'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'recipeTitel' => 'required',
            'recipeText' => 'required'
        ]); 

        dd($request); 
            $request -> create([
            'recipeTitel' =>$request->recipeTitel,
            'recipeText' =>$request->recipeText
        ]); 

        dd($request); 

        return back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewRecipe  $newRecipe
     * @return \Illuminate\Http\Response
     */
    public function show(NewRecipe $newRecipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewRecipe  $newRecipe
     * @return \Illuminate\Http\Response
     */
    public function edit(NewRecipe $newRecipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewRecipe  $newRecipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewRecipe $newRecipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewRecipe  $newRecipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewRecipe $newRecipe)
    {
        //
    }
}
