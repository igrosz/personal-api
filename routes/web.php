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

Route::get('/tt', function () {
    return 'welcome';
});

Route::get('/institutions','MyInsController@index' );


Route::get('/institutions/{id}', 'MyInsController@show' );

Route::get('/projects','MyProjController@index' );


Route::get('/projects/{id}', 'MyProjController@show' );