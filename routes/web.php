<?php

use Illuminate\Support\Facades\Route;

Route::get('/`', function () {
    return view('home');
})->name('home');

Route::get('/comment', function () {
    return view('comment');
})->name('comment');

Route::post('/comment/submit', 'CommentController@submit')->name('comment-form');
Route::post('/comments/{id}/update', 'CommentController@updateCommentSubmit')->name('comment-update-submit');

Route::get('/comments', 'CommentController@allData')->name('comments');

Route::get('/comments/{id}', 'CommentController@oneComment')->name('comment-data-one');

Route::get('/comments/{id}/update', 'CommentController@updateComment')->name('comment-update');
Route::get('/comments/{id}/delete', 'CommentController@deleteComment')->name('comment-delete');



