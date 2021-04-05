<?php

namespace App\Http\Controllers;

use App\Models\Brochure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class BrochureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Render a list of a resource
        $brochures = Brochure::latest()->get();

        return view('resources.brochures.index', ['brochures'=>$brochures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.brochures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:20480'
        ]);

        $newImageName = time() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('/storage/brochures'), $newImageName);


        Brochure::create([
            'title' => $request->input('title'),
            'image_path' => $newImageName
        ]);

        return redirect('/brochures');
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
        return view('resources.brochures.edit', ['brochure'=>$brochure]);
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
        
        $brochure->update($this->validateBrochure($request));

        return redirect('/brochures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brochure  $brochure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brochure $brochure)
    {
        unlink(public_path().'/storage/brochures/'.$brochure->image_path);
        $brochure->delete();

        return redirect('/brochures');
    }

    protected function validateBrochure(Request $request): array
    {
        return $request->validate([
            'title' => 'required'
        ]);
    }

}
