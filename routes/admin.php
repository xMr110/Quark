<?php



Route::get('/', function (){

    return view('admin.dashboard');
})->name('dashboard');

Route::resource('settings','SettingController',
    ['only'=>['index','store']
    ]);
Route::get('/about','SettingController@about');

Route::resource('User','UserController');

Route::resource('Slides','SliderController');

Route::resource('Service','ServiceController');
Route::resource('Industry','IndustryController');

