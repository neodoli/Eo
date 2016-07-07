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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/signin', function () {
    return view('auth.signin');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/pricing', function () {
    return view('page.pricing');
});

Route::get('/faq', function () {
    return view('page.faq');
});

Route::get('/terms', function () {
    return view('page.terms');
});

Route::get('/contact', function () {
    return view('page.contact');
});


Route::get('/courses', function () {
    return view('page.courses');
});

Route::get('/course/{id}', function(){

    return view('page.course-details');

});

Route::get('/class', function () {
    return view('page.class');
});



Route::get("/exames", function(){

    return view('page.exam');

});

Route::get("/exames/{id}" ,function(){
    
});




//Route::get('/contact','ContactController@contact');
//Route::get('/contact/ornelio','ContactController@index');
