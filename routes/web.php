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

    Route::get('/themcautracnghiem', 'vocabularyController@getFourE', function ($typeId) {
       
    });

    Route::get('/sua/{id}', 'vocabularyController@getSua', function ($id) {
        
    });

    Route::get('/xoa/{id}', 'vocabularyController@getXoa', function ($id) {
        
    });
    Route::post('/sua/{id}', 'vocabularyController@postSua',function ($id) {
        
    });
   
});

