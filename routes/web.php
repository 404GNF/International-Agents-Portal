<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\BrochureController;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\LeafletController;
use App\Http\Controllers\RollUpController;
use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// File upload routes
//Route::get('/upload-file', [FileController::class, 'create']);
//Route::post('/upload-file', [FileUpload::class, 'store']);
Route::resource('/files', FileController::class);

Route::resource('/brochures', BrochureController::class);
Route::resource('/leaflets', LeafletController::class);
Route::resource('/rollUps', RollUpController::class);
Route::resource('/posters', PosterController::class);
Route::resource('/videos', VideoController::class);

Route::view('/howToApply', 'apply');
