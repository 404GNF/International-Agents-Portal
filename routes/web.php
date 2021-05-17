<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/a-page-crashing-the-server', function(){
    return abort(500);
});

Route::get('/resources', [ItemController::class, 'index']);

Route::get('/how-to-apply', function() {
    return view('apply');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

