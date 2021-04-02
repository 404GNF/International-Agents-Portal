<?php

namespace App\Http\Controllers;

use App\Models\RollUp;
use Illuminate\Http\Request;

class RollUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resources.rollUps.index');
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
     * @param  \App\Models\RollUp  $rollUp
     * @return \Illuminate\Http\Response
     */
    public function show(RollUp $rollUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RollUp  $rollUp
     * @return \Illuminate\Http\Response
     */
    public function edit(RollUp $rollUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RollUp  $rollUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RollUp $rollUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RollUp  $rollUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(RollUp $rollUp)
    {
        //
    }
}
