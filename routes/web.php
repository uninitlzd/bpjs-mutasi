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

    Route::post('make', 'FormController@make')->name('form.new.mutation');
    Route::post('make/new', 'FormController@makeNew')->name('form.new');
    Route::post('make/fktp', 'FormController@makeFKTP')->name('form.new.fktp');
    Route::post('make/tambah_anggota_keluarga_inti', 'FormController@makeTambahKeluargaInti')->name('form.new.tambah_anggota_keluarga_inti');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faq', function () {
    return view('faq');
});


Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
   Route::get('satker', 'SatkerController@index');
});
