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

Route::get('test', 'lessonController@viewInsertLesson', function(){
    
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
});

Route::group(['prefix' => '/learn'], function () {
    Route::post('/check', 'learnController@check', function (){

    });

    Route::get('/get-list-question-by-lesson/{lessonId}','learnController@getListQuestionByLesson', function ($lessonId) {
    });
});

Route::group(['prefix' => '/lesson'], function () {
    Route::post('/insert', 'lessonController@create', function (){

    });

    Route::get('/lesson-add','lessonController@viewInsertLesson', function () {
    });

    Route::get('/lesson-list','lessonController@viewListLesson', function () {
        
    });
});

Route::group(['prefix' => '/question'], function () {
    Route::post('/insert', 'questionController@create', function (){

    });

    Route::post('/insert-tn', 'questionController@createTN', function (){

    });

    Route::get('/question-add','questionController@viewInsertQuestion', function () {

    });

    Route::get('/them-trac-nghiem','questionController@hienThiThemTN', function () {

    });

});


