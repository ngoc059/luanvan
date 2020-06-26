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
    return view('main.comment');
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

    Route::get('/list-user/{id}', 'LoginController@listUser', function($id){
        
    });

    Route::get('/delete/{id}', 'LoginController@delete', function($id){
        
    });
});

Route::group(['prefix' => '/vocabulary', 'middleware'=>'permissionUser'], function () {

    Route::post('/create', 'vocabularyController@insert', function () {
       
    });

    Route::get('/view-vocabulary', 'vocabularyController@viewVocabulary', function (){

    });

    Route::get('/list', 'vocabularyController@list', function (){

    });

    Route::post('/create-type', 'vocabularyController@insertType', function () {
       
    });

    Route::get('/delete/{id}', 'vocabularyController@deleteTypeVocabulary', function ($id) {

    });
});




Route::group(['prefix' => '/learn'], function () {
    Route::post('/check', 'learnController@check', function (){

    });

    Route::get('/get-list-question-by-lesson/{lessonId}','learnController@getListQuestionByLesson', function ($lessonId) {
    });

    Route::get('/get-list-comment/{lessonId}','learnController@getListComment', function ($lessonId) {
    });
});

Route::group(['prefix' => '/lesson', 'middleware'=>'permissionUser'], function () {
    Route::get('get/{id}','lessonController@lesson');


    Route::post('/insert', 'lessonController@create', function (){

    });

    Route::get('/lesson-add','lessonController@viewInsertLesson', function () {
    });

    Route::get('/list','lessonController@list');

    Route::get('/delete/{id}', 'lessonController@deleteLesson', function ($id) {

    });

    Route::get('/update/{id}', 'lessonController@updateLesson', function ($id) {

    });

    Route::post('/sua', 'lessonController@suaLesson', function () {

    });

});

Route::group(['prefix' => '/lesson'], function () { 
    Route::get('/lesson-list','lessonController@viewListLesson', function () {
        
    });

});


Route::group(['prefix' => '/theme', 'middleware'=>'permissionUser'], function () {
    Route::get('/view-insert', function (){
        return view('them.themchude');
    });
    
    Route::post('/add', 'ThemeController@create', function (){

    });

    Route::get('/list', 'themeController@list');
    Route::get('/delete/{id}', 'themeController@deleteTheme', function ($id) {

    });
    

});

Route::group(['prefix' => '/theme'], function () { 
    Route::get('/list', 'themeController@list');

});

Route::post('/them-comment', 'lessonController@postComment', function () {
       
});


Route::group(['prefix' => '/type', 'middleware'=>'permissionUser'], function () {
    Route::get('/view-type', function (){
        return view('them.themloaituvung');
    });

    Route::get('/view-vocabulary', function (){
        return view('them.themtuvung');
    });

    
});

Route::group(['prefix' => '/question'], function () { 
    Route::group(['prefix' => '/ajax'], function () {
        Route::get('/get-lesson/{themeId}', 'lessonController@getAjax', function ($themeId) {
           
        });
    });
});


Route::group(['prefix' => '/question', 'middleware'=>'permissionUser'], function () {
    Route::post('/insert', 'questionController@create', function (){

    });

    Route::post('/insert-tn', 'questionController@createTN', function (){
    });

    Route::get('/add/{id}','questionController@viewInsert', function ($id) {

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

Route::post('comment/{id}', 'CommentController@postCommment', function ($id) {

});