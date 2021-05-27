<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Resource;
use App\Video;
use App\Models\User;

class ItemController extends Controller
{
    public function index() {
        $user = Category::get();

        $categories = Category::get();

        $videos = Video::get();

        $resources = Resource::get();

        // Add the file format to the resources array
        for ($i = 0; $i < count($resources); $i++) {
            $resources[$i]->file_format = explode(".", json_decode(substr($resources[$i]->file, 1, -1), true)['download_link'])[1];
        }

        $items = $resources->concat($videos);

        // Creates a list of the file formats
        $file_formats = array();
        for ($i = 0; $i < count($resources); $i++) {
            $file_formats[] = $resources[$i]->file_format;
        }
        // Appends/adds the file formats to $items
        $items->file_formats = array_unique($file_formats);

        return view('resources.index')->with(compact('categories', 'items', 'user'));
    }
}
