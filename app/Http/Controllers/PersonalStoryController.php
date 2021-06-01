<?php

namespace App\Http\Controllers;

use App\Models\PersonalStory;
use Illuminate\Http\Request;

class PersonalStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = PersonalStory::latest()->get();

        return view('home', ['stories'=>$stories]);
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
     * @param  \App\Models\PersonalStory  $personalStory
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalStory $personalStory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalStory  $personalStory
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalStory $personalStory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalStory  $personalStory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalStory $personalStory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalStory  $personalStory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalStory $personalStory)
    {
        //
    }
}
