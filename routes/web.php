<?php

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

Route::get('/servicio-social', function () {
    return view('servicio-social');
});

Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/cuerpos-academicos', function () {
    return view('cuerpos-academicos');
});

Route::get('/tesis', function () {
    return view('tesis');
});

Route::get('/residencias', function () {
    return view('residencias');
});

Route::get('/investigacion', function () {
    return view('investigacion');
});
Auth::routes();

    /*Route::get('/', 'PagesControl@home');*/
    /*Route::get('tesis', 'PagesController@tesis');*/
    /*Route::get('investigacion', 'PagesController@investigacion');*/
    /*Route::get('residencias', 'PagesController@residencias');*/
    /*Route::get('cuerpos-academicos', 'PagesController@cuerpos-academicos');*/
    /*Route::get('eventos', 'PagesController@eventos');*/
    /*Route::get('servicio-social', 'PagesController@servicio-social');*/