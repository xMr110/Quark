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
Auth::routes();

Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/contact', 'SiteController@contact');
Route::post('/Message/Send','SiteController@message');

Route::get('/Industries','SiteController@industries');
Route::get('/Industry/{industry}/information','SiteController@SingleIndustry');



Route::get('/Category/{category}/products','SiteController@SingleCategory');
Route::get('/Products','SiteController@Products');
Route::get('/Product/{product}/information','SiteController@Product');

// Admin Area
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    require_once base_path('routes/admin.php');
});
