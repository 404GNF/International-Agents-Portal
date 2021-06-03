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

        $resources = Resource::get();
        $videos = Video::get();

        $items = $resources->concat($videos);

        return view('resources.index')->with(compact('categories', 'items', 'user'));
    }
}
