<?php

namespace App\Http\Controllers;

use App\Models\Leaflet;
use Illuminate\Http\Request;

class LeafletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaflets = Leaflet::latest()->get();

        return view('resources.leaflets.index', ['leaflets'=>$leaflets]);
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
     * @param  \App\Models\Leaflet  $leaflet
     * @return \Illuminate\Http\Response
     */
    public function show(Leaflet $leaflet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leaflet  $leaflet
     * @return \Illuminate\Http\Response
     */
    public function edit(Leaflet $leaflet)
    {
        return view('resources.leaflets.edit', ['leaflet'=>$leaflet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leaflet  $leaflet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leaflet $leaflet)
    {
        $leaflet->update($this->validateLeaflet($request));

        return redirect(route('leaflets.index', $leaflet))->with('status', 'Leaflet updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leaflet  $leaflet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leaflet $leaflet)
    {
        //
        $leaflet->delete();

        return redirect(route('leaflets.index'));
    }

    /**
     * @return array
     */
    protected function validateLeaflet(Request $request): array
    {
        return $request->validate([
            'img_url' => 'required'
        ]);
    }
}
