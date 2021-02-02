<?php

namespace App\Http\Controllers\recipes;

use App\Http\Controllers\Controller;
use App\Models\favrecipes;
use Illuminate\Http\Request;

class FavrecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('hallo Fav'); 
        return view('favrecipes');
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
     * @param  \App\Models\favrecipes  $favrecipes
     * @return \Illuminate\Http\Response
     */
    public function show(favrecipes $favrecipes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\favrecipes  $favrecipes
     * @return \Illuminate\Http\Response
     */
    public function edit(favrecipes $favrecipes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\favrecipes  $favrecipes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, favrecipes $favrecipes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\favrecipes  $favrecipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(favrecipes $favrecipes)
    {
        //
    }
}
