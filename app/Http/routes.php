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
/*
|--------------------------------------------------------------------------------
| Authetication and registre routers 
|
|--------------------------------------------------------------------------------

*/
Route::get('/','HomeController@index');

/*
|--------------------------------------------------------------------------------
| Authetication and registre routers 
|
|--------------------------------------------------------------------------------

*/

Route::get('/login', 'AuthController@login');
Route::post('/login', 'AuthController@doLogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/signup', 'AuthController@signUp');
Route::post('/signup', 'AuthController@doSignUp');

/*
|--------------------------------------------------------------------------------
| Route for autheticated user
|
|--------------------------------------------------------------------------------

*/

Route::group(['middleware'=>'auth'], function(){

	Route::get('/dashboard', 'UserController@dashboard');
	Route::get('/dashboard/requested', 'UserController@requested');
	Route::get('/dashboard/old', 'UserController@old');
	Route::get('/profile', 'UserController@profile');
	Route::post('/profile/update', 'UserController@profileUpdate');
	Route::post('/profile/cupom', 'UserController@cupomStore');
	Route::get('/classroom/{courseName}/{class}','UserController@classroom');
	Route::get('/courses/{name}/signup','UserController@signup');
	Route::post('/courses/{name}/signup','UserController@doSignup');


});






/*
|--------------------------------------------------------------------------------
| Route for classroom
|
|--------------------------------------------------------------------------------

*/




/*
|--------------------------------------------------------------------------------
| Route for page user
|
|--------------------------------------------------------------------------------

*/

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

Route::get('/teachersOut','HomeController@teachersOut');
Route::post('/teachersOut','HomeController@teachersOutStore');


Route::get('/congratulation',function(){

	return view('page.congratulation');
});


Route::get('/courses','HomeController@courses');
Route::get('/courses/disciplinas/{name}','HomeController@coursesSubject');
Route::get('/courses/nivel/{name}','HomeController@coursesStage');


Route::get('/courses/{name}','HomeController@course');


Route::get('/class', function () {
    return view('page.class');
});



Route::get("/exames", function(){

    return view('page.exam');

});

Route::get("/exames/{id}" ,function(){
    
});


//admin routers

/*
|--------------------------------------------------------------------------------
| Route for page admin
|
|--------------------------------------------------------------------------------

*/

Route::group(['middleware'=>['auth','roleCheck']], function(){

	Route::get('/admin', 'admin\AdminController@index');
	Route::get('/admin/add', function(){

		return view('admin/add');
	});
	Route::post('/admin/add', 'admin\AdminController@create');


	Route::get('/admin/users', 'admin\AdminController@users');
	Route::get('/admin/users/{id}/update','admin\AdminController@update');
	Route::get('/admin/users/{id}', 'admin\AdminController@disableUser');



	Route::get('/admin/courses/signup','admin\SignupController@courseSignups');
	Route::get('/admin/course/signup/{user}/{course}','admin\SignupController@courseSignup');
	Route::get('/admin/course/signup/{user}/{course}/problem','admin\SignupController@courseProblem');
	Route::post('/admin/course/signup/{user}/{course}/problem','admin\SignupController@courseProblemStore');
	Route::post('/admin/course/signup/{user}/{course}/confirm','admin\SignupController@courseConfirm');


	
	Route::get('/admin/cupom','admin\AdminController@cupom');
	Route::post('/admin/cupom','admin\AdminController@cupomStore');


	Route::get('/admin/courses', 'admin\AdminController@courses');
	Route::get('/admin/courses/categorie/add', 'admin\AdminController@coursesCategorieAdd');
	Route::post('/admin/courses/categorie/store', 'admin\AdminController@coursesCategorieStore');
	Route::get('/admin/courses', 'admin\AdminController@courses');
	Route::get('/admin/courses/add', 'admin\AdminController@courseAdd');
	Route::post('/admin/courses/store', 'admin\AdminController@courseStore');
	Route::get('/admin/courses/{id}','admin\AdminController@course');
	Route::post('/admin/courses/{id}/update','admin\AdminController@courseUpdate');
	Route::post('/admin/courses/{id}/active','admin\AdminController@courseActive');
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
	Route::get('/admin/exame/{id}', 'admin\AdminController@exame');
	Route::get('/admin/exame/{id}/edit', 'admin\AdminController@exameEdit');
	Route::get('/admin/exame/add', 'admin\AdminController@exameAdd');
	Route::get('/admin/exame/categorie/add', 'admin\AdminController@exameCategorieAdd');
	Route::post('/admin/exame/categorie/store', 'admin\AdminController@exameCategorieStore');
	Route::post('/admin/exame/store', 'admin\AdminController@exameStore');






	Route::get('/admin/subjects', 'admin\AdminController@subjects');
	Route::get('/admin/subjects/create','admin\AdminController@subjectCreate');
	Route::post('/admin/subjects/store','admin\AdminController@subjectStore');
	Route::get('/admin/subjects/{id}/edit', 'admin\AdminController@subjectsEdit');
	Route::post('/admin/subjects/{id}/update', 'admin\AdminController@subjectsUpdate');
	Route::get('/admin/subjects/{id}/classe', 'admin\AdminController@subjectsClasse');
	Route::get('/admin/subjects/{id}/classe/create', 'admin\AdminController@subjectsClasseCreate');
	Route::post('/admin/subjects/{id}/classe/store', 'admin\AdminController@subjectsClasseStore');
	Route::get('/admin/subjects/{id}/classe/{idClasse}/edit', 'admin\AdminController@subjectsClasseEdit');
	Route::post('/admin/subjects/{id}/classe/{idClasse}/update', 'admin\AdminController@subjectsClasseUpdate');
	Route::delete('/admin/subjects/{id}/classe/{idClasse}/delete', 'admin\AdminController@subjectsClasseDelete');




	Route::get('/admin/signUp', 'admin\AdminController@signUp');




	



});


//Route::get('/contact','ContactController@contact');
//Route::get('/contact/ornelio','ContactController@index');
