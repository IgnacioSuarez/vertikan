<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('lang/{lang}', function ($lang) {
    Session::put('my.locale', $lang);
    return Redirect::to('/');
});

Route::get('/', function () {
    return view('frontend/home');
});

// Route::post('/sendContact', 'EmailsController@sendContact');
Route::get('/contact-trabajos-verticales', function () {
    return view('frontend/contacto');
});

Route::get('/vertikan-trabajos-verticales-las-palmas', function () {
    return view('frontend/vertikan');
});

Route::get('/clientes-trabajos-en-altura-gran-canaria', function () {
    return view('frontend/clientes');
});

Route::get('/grupokan-las-palmas-construccion', function () {
    return view('frontend/grupokan');
});

Route::get('/grupokan/vertikan-trabajos-verticales', function () {
    return view('frontend/vertikan-item');
});

Route::get('/grupokan/reforkan-reformas-construccion', function () {
    return view('frontend/reforkan-item');
});

Route::get('/grupokan/redes-seguridad', function () {
    return view('frontend/redes-seguridad');
});

Route::get('/grupokan/taludes', function () {
    return view('frontend/taludes');
});

Route::get('/grupokan/electrikan-electricidad', function () {
    return view('frontend/electrikan-item');
});

Route::get('/grupokan/hidrokan-fontaneria', function () {
    return view('frontend/hidrokan-item');
});

Route::get('/contact-trabajos-verticales', function () {
    return view('frontend/contacto');
});
