<?php

namespace App\Http\Controllers\recipes;

use App\Http\Controllers\Controller;
use App\Models\ranrecipe;
use Illuminate\Http\Request;

class RanrecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ranrecipes');
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
     * @param  \App\Models\ranrecipe  $ranrecipe
     * @return \Illuminate\Http\Response
     */
    public function show(ranrecipe $ranrecipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ranrecipe  $ranrecipe
     * @return \Illuminate\Http\Response
     */
    public function edit(ranrecipe $ranrecipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ranrecipe  $ranrecipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ranrecipe $ranrecipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ranrecipe  $ranrecipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ranrecipe $ranrecipe)
    {
        //
    }
}
