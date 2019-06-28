<?php



Route::get('/', function (){

    return view('admin.dashboard');
})->name('dashboard');

Route::resource('settings','SettingController',
    ['only'=>['index','store']
    ]);

Route::resource('Backgrounds','BackgroundController',['only'=>['index','store']]);
Route::get('/about','SettingController@about');

Route::resource('User','UserController');

Route::resource('Slides','SliderController');

Route::resource('Industry','IndustryController');
Route::resource('Literature','LiteratureController');
Route::resource('Partner','PartnerController');
Route::resource('Category','CategoryController');
Route::resource('Product','ProductController');
Route::resource('Literature','LiteratureController');
Route::resource('Courses','CourseController');
Route::resource('contacts','ContactController');
Route::resource('Message','MessageController',['only'=>['index','show']]);
