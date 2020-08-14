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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/pertanyaan', function () {
    return view('pertanyaan');
});
Route::get('/tambah', function () {
    return view('create');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::resource('questions', 'QuestionController');
Route::resource('answers', 'AnswerController');
Route::resource('questionComments', 'QuestionCommentController');
Route::resource('answerComments', 'AnswerCommentController');