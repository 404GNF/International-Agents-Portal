<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Render a list of a resource
        $posters = Poster::latest()->get();

        return view('resources.posters.index', ['posters'=>$posters]);
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
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function show(Poster $poster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function edit(Poster $poster)
    {
        return view('resources.posters.edit', ['poster'=>$poster]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poster $poster)
    {
        $poster->update($this->validatePoster($request));

        return redirect(route('posters.index', $poster))->with('status', 'Poster updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poster $poster)
    {
        $poster->delete();

        return redirect(route('posters.index'));
    }

    /**
     * @return array
     */
    protected function validatePoster(Request $request): array
    {
        return $request->validate([
            'img_url' => 'required'
        ]);
    }
}
