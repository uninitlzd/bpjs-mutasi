<?php

use App\News;
use App\PromotionalImages;
use GuzzleHttp\Client;

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

    Route::resource('submissions', 'SubmissionController');
    Route::get('submissions/{submission}/feedback', 'SubmissionController@getFeedback')->name('submissions.feedback');

    Route::group(['namespace' => 'Admin'], function () {
        Route::resource('satker','SatkerController');
        Route::resource('qna','QNAController');
        Route::resource('submission_history', 'SubmissionHistoryController');
        Route::get('submissions/{submission}/approve', 'SubmissionHistoryController@approve')->name('submission.approve');
        Route::get('submissions/{submission}/reject', 'SubmissionHistoryController@getReject')->name('submission.view.reject');
        Route::post('submissions/{submission}/reject', 'SubmissionHistoryController@doReject')->name('submission.reject');

        Route::resource('promotional_images', 'PromotionalImagesController');
        Route::resource('news', 'NewsController');
    });

    Route::get('/chat', 'Admin\ChatController@index')->name('get.chat');
});

Route::get('/', function () {
    $news = News::get();
    $images = PromotionalImages::get();
    return view('welcome', compact('news', 'images'));
});

Route::get('/faq', function () {
    $qna = \App\QNA::get();
    return view('faq', compact('qna'));
});


Route::get('home', function () {
    $news = News::get();
    $images = PromotionalImages::get();
    return view('welcome', compact('news', 'images'));
});

Route::get('test', function () {
    echo 'test';
});
