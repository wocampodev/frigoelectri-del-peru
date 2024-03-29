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
    Route::get('/nosotros', 'WebController@show_view_about')->name('about');

    Route::get('/contacto', 'WebController@show_view_contact')->name('contact');

    Route::resource('servicios', 'ServiceController', ['only' => ['index']]);
    Route::get('all-services', 'ServiceController@show_all_services');
    Route::get('servicios/{slug}', 'ServiceController@show_service');
    Route::get('search/service', 'ServiceController@search_service');

    Route::post('contact-web', 'SolicitudeController@new_contact');
    Route::post('order-web', 'OrderController@new_order');

});
