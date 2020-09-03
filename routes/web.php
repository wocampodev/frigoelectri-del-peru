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

Route::group([
    
    'namespace' => 'Web',

], function(){

    Route::resource('/', 'HomeController', ['only' => ['index']]);

    Route::resource('about', 'AboutController', ['only' => ['index']]);

    Route::resource('service', 'ServiceController', ['only' => ['index']]);
    Route::get('/service/detail', 'ServiceController@show_service');

    Route::resource('contact', 'ContactController', ['only' => ['index']]);

});
