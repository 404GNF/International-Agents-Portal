<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Render a list of a resource
        $resources = Resource::latest()->get();
        
        return view('resources.index', ['resources'=>$resources]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.create');
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
            'tag' => 'required',
            'image' => 'mimes:jpg,png,jpeg|max:20480'
        ]);

        $newImageName = $request->title;

        if (isset($request->image)) {
            $newImageName = time() . '-' . $request->title . '.' . $request->image->extension();

            $request->image->move(public_path('/storage/resources'), $newImageName);

            Resource::create([
                'title' => $request->input('title'),
                'tag' => $request->input('tag'),
                'image_path' => $newImageName,
                'missingImage' => false,
            ]);
        } else {
            Resource::create([
                'title' => $request->input('title'),
                'tag' => $request->input('tag'),
                'image_path' => $newImageName,
                'video_url' => explode('=' ,$request->input('video'))[1]
            ]);
        }

        return redirect('/resources');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        return view('resources.edit', ['resource'=>$resource]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        
        $resource->update($this->validateResource($request));

        return redirect('/resources');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        if($resource->missingImage == false) {
            unlink(public_path().'/storage/resources/'.$resource->image_path);
        }
        $resource->delete();

        return redirect('/resources');
    }

    protected function validateResource(Request $request): array
    {
        return $request->validate([
            'title' => 'required',
            'tag' => 'required'
        ]);
    }

}
