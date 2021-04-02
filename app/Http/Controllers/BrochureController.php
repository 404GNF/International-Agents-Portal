<?php

namespace App\Http\Controllers;

use App\Models\Brochure;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
=======
>>>>>>> origin

class BrochureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
       $files = Storage::allFiles('public/brochures/');
        return view('brochures.index', [
            'files' => $files
        ]);
=======
        //Render a list of a resource
        $brochures = Brochure::latest()->get();

        return view('resources.brochures.index', ['brochures'=>$brochures]);
>>>>>>> origin
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
     * @param  \App\Models\Brochure  $brochure
     * @return \Illuminate\Http\Response
     */
    public function show(Brochure $brochure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brochure  $brochure
     * @return \Illuminate\Http\Response
     */
    public function edit(Brochure $brochure)
    {
<<<<<<< HEAD
        //
=======
        return view('resources.brochures.edit', ['brochure'=>$brochure]);
>>>>>>> origin
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brochure  $brochure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brochure $brochure)
    {
<<<<<<< HEAD
        //
=======
        $brochure->update($this->validateBrochure($request));

        return redirect(route('brochures.index', $brochure))->with('status', 'Brochure updated!');
>>>>>>> origin
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brochure  $brochure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brochure $brochure)
    {
<<<<<<< HEAD
        //
=======
        $brochure->delete();

        return redirect(route('brochures.index'));
    }

    /**
     * @return array
     */
    protected function validateBrochure(Request $request): array
    {
        return $request->validate([
            'img_url' => 'required'
        ]);
>>>>>>> origin
    }
}
