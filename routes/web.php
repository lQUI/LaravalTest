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
    return view('welcome');
});

Route::post('/', function () {
	return 'get a post requied';
});

Route::delete('/', function () {
	return 'get a delete request';
});

Route::get('/user', function () {
	return 'hello World!';
})->middleware('checkage');


Route::get('/check',function () {
	return 'pass!!!';
})->middleware('checkrole:editor');

//Route::get('user/{id}', function ($id) {
  //  return 'User '.$id;
//});





//Route::resource('photos','PhotoController');

