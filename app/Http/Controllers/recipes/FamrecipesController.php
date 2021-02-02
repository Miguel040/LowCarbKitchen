<?php

namespace App\Http\Controllers\recipes;

use App\Http\Controllers\Controller;
use App\Models\Famrecipes;
use Illuminate\Http\Request;

class FamrecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recipes.famrecipes');
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
     * @param  \App\Models\Famrecipes  $famrecipes
     * @return \Illuminate\Http\Response
     */
    public function show(Famrecipes $famrecipes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Famrecipes  $famrecipes
     * @return \Illuminate\Http\Response
     */
    public function edit(Famrecipes $famrecipes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Famrecipes  $famrecipes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Famrecipes $famrecipes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Famrecipes  $famrecipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Famrecipes $famrecipes)
    {
        //
    }
}
