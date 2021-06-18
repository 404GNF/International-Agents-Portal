<?php

use App\Http\Controllers\PersonalStoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\FunctionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PersonalStoryController::class, 'index']);

Route::get('/a-page-crashing-the-server', function(){
    return abort(500);
});

Route::get('/resources', [ItemController::class, 'index']);

Route::get('/how-to-apply', function() {
    return view('apply');
});

Route::get('/socials', function() {
    return view('socials');
});

Route::get('/logout', [FunctionsController::class, 'logout']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

