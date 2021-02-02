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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
