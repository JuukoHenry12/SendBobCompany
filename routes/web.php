<?php


Route::get('/', function () {
    return view('index');
});

Auth::routes();
// Auth::routes(['excerpt'=>'register']);

Route::get('/dashboard', 'HomeController@index')->name('home');



// Route::group(['middleware' => ['guest']], function () {
    // Route::resource('farmers', 'FarmerController',['only'=>['index','show','create','store']]);
    // Route::resource('vendors', 'VendorController',['only'=>['index','show','create','store']]);
    Route::get('/form-test','VendorController@getForm');
    Route::post('/form-test','VendorController@postForm');
// });



    Route::resource('farmers', 'FarmerController');
    Route::resource('vendors', 'VendorController');
    // Route::get('/register','Auth\RegisterController@showRegistrationForm');
    // Route::post('/register','Auth\RegisterController@register');

    Route::get('farmer/{id}','FarmerController@update');




