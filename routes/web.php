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

Route::get('/', function () {
    return view('main.main');
});

Route::get('login', function(){
    return view('auth.login');
});

Route::get('register', function(){
    return view('auth.register');
});

Route::get('home', function(){
    return view('home');
});

Route::get('chude', function(){
    return view('chude');
});


Route::group(['prefix' => '/vocabulary'], function () {
    Route::get('/get-four/{typeId}', 'vocabularyController@getFour', function ($typeId) {
       
    });

    Route::get('/tracnghiem', 'vocabularyController@getFourE', function ($typeId) {
       
    });
   
});

Route::group(['prefix' => '/lession'], function () {
    Route::get('/them-trac-nghiem', function () {
        return view('them.themcautracnghiem');
    });

    Route::get('/them-nghe-viet-lai', function () {
        return view('them.themnghevietlai');
    });

    Route::get('/themcautracnghiem', 'vocabularyController@getFourE', function ($typeId) {
       
    });
});

Route::group(['prefix' => '/learn'], function () {
    Route::get('/learn-by-type/{notification}','learnController@viewQuestLearnByType', function ($notification) {
    });

    Route::get('/nghe-viet-lai','learnController@viewQuestListenToWrite', function ($notification) {
    });

    Route::post('/check/{id}', 'learnController@check', function ($id){

    });
});
