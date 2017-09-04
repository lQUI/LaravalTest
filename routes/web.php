<?php

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
	return 'Hello World!';
});

Route::get('/index', function ()  {
	return view('index');
});

Route::post('/', function () {
	return 'get a post requied';
});

Route::delete('/', function () {
	return 'get a delete request';
});

//Middleware: check the user age .the browser will show 'pass!!!' if age more than 200 
Route::get('/user', function () {
	return 'pass!!!';
})->middleware('checkage');


Route::get('/check',function () {
	return 'pass!!!';
})->middleware('checkrole:editor');

//Route::get('user/{id}', function ($id) {
  //  return 'User '.$id;
//});


Route::get('user/{name}', function ($name) {
	return $name;
})->where('name','[A-Z,a-z]+');

Route::domain('{acount}.myapp.com')->group(function () {
	Route::get('user/{id}',function ($account,$id) {
		return $account.$id;
	});
});

Route::prefix('admin')->group(function () {
	Route::get('users', function () {
		return 'admin user';
	});
});

Route::get('api/users/{user}', function (App\User $user) {
	return $user->email;
});

//the form validaition
Route::prefix('form') -> group(function () {
	Route::get('/',function () { 
		return view ('form');
	});

	Route::post('post','PhotoController@store');
});