<?php

namespace App\Http\Controllers\recipes;

use App\Models\Recipes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipes::get();

        return view('recipes.newrecipe', [
            'recipes' => $recipes
        ]);  

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
