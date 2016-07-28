<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('blog-details', function () {
    return view('blog-details');
});

Route::get('financial-service', function () {
    return view('financial-service');
});

Route::get('consultancy', function () {
    return view('consultancy');
});

Route::get('business-plan', function () {
    return view('business-plan');
});

Route::get('market-analysis', function () {
    return view('market-analysis');
});

Route::get('marketing', function () {
    return view('marketing');
});
Route::get('investment', function () {
    return view('investment');
});

Route::get('contact-us', function () {
    return view('contact-us');
});




