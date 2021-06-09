<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Resource;
use App\Video;
use App\Models\User;

class ItemController extends Controller
{
    public function index()
    {
        $user = Category::get();

        $categories = Category::get();

        $videos = Video::get();

        $resources = Resource::get();

        $resources = $this->generateFileFormat($resources);

        $items = $resources->concat($videos);

        // Appends/adds the file formats to $items
        $items->file_formats = $this->getFileFormats($resources);

        return view('resources.index')->with(compact('categories', 'items', 'user'));
    }

    /**
     * Generates and adds the file formats to every element of a resources object
     *
     * @param Object $resources Collection of all the resources (Brochure, Roll-ups, ...) 
     *  
     * @return Object $resources with the file formats appended
     */
    private function generateFileFormat($resources){
        // Loop throught the resources object
        for ($i = 0; $i < count($resources); $i++) {
            // Add the file format to a resource 
            $resources[$i]->file_format = explode(".", json_decode(substr($resources[$i]->file, 1, -1), true)['download_link'])[1];
        }
        
        return $resources;
    }

    /**
     * Gets the unique file formats from a resources object
     *
     * @param Object $resources Collection of all the resources (Brochure, Roll-ups, ...) 
     *  
     * @return Array Contains the unique file formats or the string "No file format"
     */
    private function getFileFormats($resources)
    {
        // Checks if $resources is empty
        if(count($resources) == 0){
            return ["No file format"];
        }
        // Creates a list of the file formats
        $file_formats = array();
        for ($i = 0; $i < count($resources); $i++) {
            $file_formats[] = $resources[$i]->file_format;
        }

        // Removes duplicate values from $file_formats
        return array_unique($file_formats);
    }
}
