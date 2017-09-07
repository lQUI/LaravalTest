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

//Middleware: check the user age .the browser will show 'pass!!!' if age more than 200 
Route::get('/user', function () {
    return 'pass!!!';
})->middleware('checkage');

Route::get('user/{name}', function ($name) {
    return $name;
})->where('name','[A-Z,a-z]+');

//
Route::prefix('form') -> group(function () {
    Route::get('/',function () { 
        return view ('form');
    });

    Route::post('post','PhotoController@store');
});

/**
完成任务(文档)[https://shimo.im/doc/jMyLTKOtyRobZFcB?r=XY7NO9/#magicdomid96]
**/
Route::prefix('v{version}') -> group(function () {
    Route::get('/', function(){
        return view('test');
    });

    //3.1 Basic Parameterized Http Route
    Route::get('test-api', function () {
        //
    })-> where('version', '[0-9]$');
    
    //3.2 Basic Query in Request & 3.3 URLEncoded Form in Request
    Route::match(['get','post'],'{action}', 'Arithnetic@do');

    //3.4 Html Template Engine Practice
    Route::get('{namespace}/{resource}/{action}', function(){
        $students=array(
            new App\Student('san', 'zhang', 21),
            new App\Student('si', 'li', 35) 
            );

        return view('student', ['students' => $students]);
    });

    //3.5 Logging to Multiple Files Differentiated by Levels
    Route::post('{namespace}/{level}/{action}', function ($version,$namespace, $level, $action) {
        switch ($action) {
            case 'refresh':
               App\UserLogger::deleteLog ($namespace) ;
                break;

            case 'append':
                App\UserLogger::getLogger ($namespace) -> log  ($level, 'WOW!!! ');
                break;
            
            default:break;
        }
        return  ['ret' => 1000];    
    });

}) ;

Route::get('{user}/wallet/self/detail','AuthnicationControll@check');
