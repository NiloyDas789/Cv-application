<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
Route::get('/php', function () {
    return view('form.phpform');
});
Route::get('/video', function () {
    return view('form.videoform');
});
Route::get('/reporter', function () {
    return view('form.reporterform');
});
Route::get('/recieptionist', function () {
    return view('form.recieptionistform');
});

Route::get( '/cv/cv-create', 'App\Http\Controllers\CvController@create' )->name( 'cv.create' );
Route::post( '/cv/cv-create', 'App\Http\Controllers\CvController@store' )->name( 'cv.store' );


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {


    Route::get( '/cv', 'App\Http\Controllers\CvController@index' )->name( 'cv.index' );


});
