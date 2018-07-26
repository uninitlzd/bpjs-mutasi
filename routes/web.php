<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10,20']], function() {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
    Route::get('users/{user}/set-password', 'UserController@viewSetPassword')->name('users.view.set-password');
    Route::put('users/{user}/set-password', 'UserController@setPassword');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('test/spreadsheet', 'MutationFormController@make');


