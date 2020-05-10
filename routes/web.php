<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comment', function () {
    return view('comment');
})->name('comment');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::post('/comment/submit', 'CommentController@submit')->name('comment-form');

Route::post('/comments/{id}/update', 'CommentController@updateCommentSubmit')->name('comment-update-submit');
Route::get('/comments', 'CommentController@allData')->name('comments');
Route::get('/comments/{id}', 'CommentController@oneComment')->name('comment-data-one');
Route::get('/comments/{id}/update', 'CommentController@updateComment')->name('comment-update');
Route::get('/comments/{id}/delete', 'CommentController@deleteComment')->name('comment-delete');

Route::get('/schedule/cafedras', 'CafedraController@getList')->name('CafedraList');
Route::get('/schedule/lectures', 'LectureController@getList')->name('LectureList');
Route::get('/schedule/subjects', 'SubjectController@getList')->name('SubjectList');
Route::get('/schedule/Groups', 'GrController@getList')->name('GroupList');


Route::post('/schedule/lecturesofcafedra', 'CafedraController@getLectureList')->name('CafedraLectureList');
Route::post('/schedule/lectureInfo', 'LectureController@getLectureList')->name('LectureInfo');
Route::post('/schedule/SubjectInfo', 'SubjectController@getSubjectInfo')->name('SubjectInfo');
Route::post('/schedule/GroupInfo', 'GrController@getGroupInfo')->name('GroupInfo');



