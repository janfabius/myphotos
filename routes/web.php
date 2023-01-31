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
    return view('welcome');
});

Route::get('/hello/{param}/{param2}', function ($param,$param2) {
    return 'ciao. Param: '.$param.' Param2: '.$param2;
});

Route::get('/hello-view/{param}', function ($pr) {

$model = ['param1'=>$pr,
          'param2'=>'word',
        ];

    return view('hello-view',$model);
});

Route::get('/hello-controller/{param1}/{param2}', 'MyFirstController@index');

Route::get('/hello-controller-query-string', 'MyFirstController@indexWithQueryString');
