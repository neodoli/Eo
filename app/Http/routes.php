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


/**

*page route

*/
Route::get('/','HomeController@index');

Route::get('/login', 'AuthController@login');
Route::post('/login', 'AuthController@doLogin');

Route::get('/signup', 'AuthController@signUp');
Route::post('/signup', 'AuthController@doSignUp');

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


Route::get('/courses/{id}', function(){

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


//admin routers


Route::get('/admin', 'admin\AdminController@index');
Route::get('/admin/add', function(){

	return view('admin/add');
});
Route::post('/admin/add', 'admin\AdminController@create');


Route::get('/admin/users', 'admin\AdminController@users');
Route::get('/admin/users/{id}/update','admin\AdminController@update');
Route::get('/admin/users/{id}', 'admin\AdminController@disableUser');



Route::get('/admin/courses', 'admin\AdminController@coursers');
Route::get('/admin/courses/add', 'admin\AdminController@couserAddGet');
Route::post('/admin/courses/add', 'admin\AdminController@couserAddPost');
Route::get('/admin/courses/{id}','admin\AdminController@course');
Route::post('/admin/courses/{id}/update','admin\AdminController@courseUpdate');
Route::get('/admin/courses/{id}/edit','admin\AdminController@courseEdit');
Route::get('/admin/courses/{id}/video/add','admin\AdminController@courseVideoAddGet');
Route::post('/admin/courses/{id}/video/add','admin\AdminController@courseVideoAddPost');
Route::get('/admin/courses/{id}/video/{videoId}','admin\AdminController@courseVideo');
Route::get('/admin/courses/{id}/video/{videoId}/edit','admin\AdminController@courseVideoEdit');
Route::post('/admin/courses/{id}/video/{videoId}/update','admin\AdminController@courseVideoUpdate');
Route::delete('/admin/courses/{id}/video/{videoId}/delete','admin\AdminController@courseVideoDelete');
Route::get('/admin/courses/{id}/video/{videoId}/material/{idMaterial}/edit','admin\AdminController@courseVideoMaterialEdit');
Route::post('/admin/courses/{id}/video/{videoId}/material/{idMaterial}/update','admin\AdminController@courseVideoMaterialUpdate');
Route::get('/admin/courses/{id}/video/{videoId}/material/create','admin\AdminController@courseVideoMaterialCreate');
Route::post('/admin/courses/{id}/video/{videoId}/material/create','admin\AdminController@courseVideoMaterialDoCreate');
Route::delete('/admin/courses/{id}/video/{videoId}/material/{materialName}','admin\AdminController@courseVideoMaterialDelete');




Route::get('/admin/teachers/in', 'admin\AdminController@teachers');
Route::get('/admin/teachers/out', 'admin\AdminController@teachersOut');


Route::get('/admin/exames', 'admin\AdminController@exames');
Route::get('/admin/subjects', 'admin\AdminController@subjects');
Route::get('/admin/signUp', 'admin\AdminController@signUp');

//Route::get('/contact','ContactController@contact');
//Route::get('/contact/ornelio','ContactController@index');
