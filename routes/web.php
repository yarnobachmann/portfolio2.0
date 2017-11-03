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

Route::get('/', 'PagesController@getIndex');

Route::get('/contact', 'PagesController@getContact');

Route::get('/team', 'PagesController@getTeam');

Route::post('contact', 'PagesController@postContact');

Route::get('/gallery', function () {
    $images = App\Image::all();
    return view('pages.gallery', compact('images'));
});

Route::get('/portfolio', 'PagesController@getPortfolio');

Route::get('/ronay', 'PagesController@getRonay');

Route::get('80s', function () {
    return view('pages.80');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
