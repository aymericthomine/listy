<?php

use Illuminate\Support\Facades\Route;
use Mailjet\LaravelMailjet\Facades\Mailjet;
use App\Http\Controllers\ImageController;
use App\Models\Image;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth']   , function () {

        Route::get('/recipes'           , function () { return view('recipes'); })->name('recipes');
        Route::get('/profile'       , function () { return view('profile'); })->name('profile');
        Route::get('/map'           , function () { return view('map'); })->name('map');

});

Route::get('/forgot-password/{token}'   , function (Request $request) {
    if (! $request->hasValidSignature()) {
        abort(401);
    }
    return view('login');
})->name('auth.forgot-password');

Route::get('/images',         [ImageController::class, 'create']);
Route::post('/images',        [ImageController::class, 'store']);
Route::get('/images/{image}', [ImageController::class, 'show']);

