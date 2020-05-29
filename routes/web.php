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

Route::get('/', 'LoginController@viewLogin', function () {
    
});

Route::get('test', 'lessonController@viewInsertLesson', function(){
    
});

Route::get('home', function(){
    return view('home');
});

Route::get('ajax', function(){
    return view('home');
});

Route::group(['prefix' => '/user'], function () {
    Route::post('/login-admin', 'LoginController@loginAdmin', function (){

    });

    Route::get('/login-out', 'LoginController@logOutAdmin', function (){

    });

    Route::get('/login', 'LoginController@viewLogin', function (){

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

    Route::get('/list', 'vocabularyController@list', function (){

    });
    
   
});




Route::group(['prefix' => '/learn'], function () {
    Route::post('/check', 'learnController@check', function (){

    });

    Route::get('/get-list-question-by-lesson/{lessonId}','learnController@getListQuestionByLesson', function ($lessonId) {
    });
});

Route::group(['prefix' => '/lesson'], function () {
    Route::get('get/{id}','lessonController@lesson');


    Route::post('/insert', 'lessonController@create', function (){

    });

    Route::get('/lesson-add','lessonController@viewInsertLesson', function () {
    });

    Route::get('/lesson-list','lessonController@viewListLesson', function () {
        
    });

    Route::get('list','lessonController@list');
});
Route::group(['prefix' => '/theme'], function () {
    Route::get('/index', 'themeController@index');
    Route::get('/view-insert', function (){
        return view('them.themchude');
    });
    
    Route::post('/add', 'ThemeController@create', function (){

    });

    Route::get('/list', 'themeController@list');
});


Route::group(['prefix' => '/type'], function () {
    Route::get('/view-type', function (){
        return view('them.themloaituvung');
    });

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

    Route::group(['prefix' => '/ajax'], function () {
        Route::get('/get-lesson/{themeId}', 'lessonController@getAjax', function ($themeId) {
           
        });
    });
});
