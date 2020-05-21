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
    return view('auth.login');
});

Route::get('login', function(){
    return view('learn.nghephatamlai');
});

Route::get('register', function(){
});

Route::get('test', 'lessonController@viewInsertLesson', function(){
    
});

Route::get('home', function(){
    return view('home');
});

Route::group(['prefix' => '/user'], function () {
    Route::post('/login-admin', 'LoginController@loginAdmin', function (){

    });

    Route::get('/login-out', 'LoginController@logOutAdmin', function (){

    });

    Route::get('/register', 'LoginController@register', function(){
        
    });

    Route::post('/create', 'LoginController@createUser', function() {
        
    });
});

Route::group(['prefix' => '/vocabulary'], function () {
    Route::get('/get-four/{typeId}', 'vocabularyController@getFour', function ($typeId) {
       
    });

    Route::get('/tracnghiem', 'vocabularyController@getFourE', function ($typeId) {
       
    });

    Route::post('/create', 'vocabularyController@insert', function () {
       
    });

    Route::get('/view-vocabulary', 'vocabularyController@viewVocabulary', function (){

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
    Route::get('/{id}','lessonController@lesson');


    Route::post('/insert', 'lessonController@create', function (){

    });

    Route::get('/lesson-add','lessonController@viewInsertLesson', function () {
    });

    Route::get('/lesson-list','lessonController@viewListLesson', function () {
        
    });
});
Route::group(['prefix' => '/theme'], function () {
    Route::get('/index', 'themeController@index');
    Route::get('/view-insert', function (){
        return view('them.themchude');
    });
    
    Route::post('/add', 'ThemeController@create', function (){

    });
});

Route::group(['prefix' => '/img'], function () {
    Route::get('/view-img', function (){
        return view('them.themhoctheohinhanh');
    });
    
});

Route::group(['prefix' => '/type'], function () {
    Route::get('/view-type', function (){
        return view('them.themloaituvung');
    });
    
});

Route::group(['prefix' => '/type'], function () {
    Route::get('/view-vocabulary', function (){
        return view('them.themtuvung');
    });
    
});

Route::group(['prefix' => '/question'], function () {
    Route::post('/insert', 'questionController@create', function (){

    });

    Route::post('/insert-tn', 'questionController@createTN', function (){

    });

    Route::post('/insert-ls', 'questionController@createLS', function (){

    });

    Route::get('/question-add','questionController@viewInsertQuestion', function () {

    });

    Route::get('/them-trac-nghiem','questionController@hienThiThemTN', function () {

    });
    Route::get('/view-img', 'questionController@hienThiThemIMG', function (){

    });

    Route::get('/view-insert-listen-repeat', 'questionController@viewRepeat', function (){

    });

    Route::post('/insert-listen-repeat', 'questionController@CreateRepeat', function (){

    });

    Route::post('/insert-img', 'questionController@createIMG', function (){

    });
});
