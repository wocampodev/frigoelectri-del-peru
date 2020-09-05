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

    Route::get('/', 'WebController@show_view_home')->name('home');
    Route::get('/about', 'WebController@show_view_about')->name('about');
    Route::get('/contact', 'WebController@show_view_contact')->name('contact');

    Route::resource('service', 'ServiceController', ['only' => ['index']]);
    Route::get('all-services', 'ServiceController@show_all_services');
    Route::get('/service/detail', 'ServiceController@show_service');

});
