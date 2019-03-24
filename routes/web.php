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
Route::post('/message/Send','SiteController@message');

Route::get('/industries','SiteController@industries');
Route::get('/industry/{industry}/information','SiteController@SingleIndustry');
Route::get('/literatures','SiteController@Literatures');


Route::get('/category/{category}/products','SiteController@SingleCategory');
Route::get('/products','SiteController@Products');
Route::get('/product/{product}/information','SiteController@Product');
Route::get('/partners','SiteController@partners');
Route::get('/partner/{partner}/information','SiteController@partner');
// Admin Area
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    require_once base_path('routes/admin.php');
});
