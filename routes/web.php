<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.index');
});
Auth::routes();
Route::prefix('dashboard')->middleware(['auth', 'wedding'])->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');

    /** ADMIN ROUTES */
    Route::name('admin.')->middleware(['role:admin'])->group(function () {
        Route::get('/wedding/table', 'WeddingController@table')->name('wedding.index');
        Route::get('/wedding/{wedding}', 'WeddingController@show')->name('wedding.show');
    });
    /** ------------------------- WEDDING ------------------------- */
    Route::resource('/wedding', 'WeddingController')->except([
        'show', 'store', 'create'
    ]);
    Route::post('/wedding/update-photos/{wedding}', 'WeddingController@updateCouplePhoto')->name('wedding.update.photos');
    Route::delete('/wedding/delete-photos/{wedding}', 'WeddingController@destroyCouplePhoto')->name('wedding.destroy.photos');

    /** ------------------------- STORY ------------------------- */
    Route::get('/story', 'StoryController@index')->name('story.index');
    Route::post('/story', 'StoryController@store')->name('story.store');
    Route::get('/story/{id}', 'StoryController@show')->name('story.show');
    Route::put('/story/{id}/update', 'StoryController@update')->name('story.update');
    Route::delete('/story/{id}', 'StoryController@destroy')->name('story.delete');
    /**  ------------------------- EVENT ------------------------- */
    Route::get('/event', 'EventController@index')->name('event.index')->middleware('role:customer');

    /** ------------------------- INVITATION ------------------------- */
    Route::get('/invitation', 'InvitationController@index')->name('invitation.index');
    Route::post('/add-invitation', 'InvitationController@addInvitation')->name('invitation.add');
    Route::get('/invitation/{id}', 'InvitationController@getInvitationById')->name('invitation.getbyid');
    Route::put('/invitation', 'InvitationController@updateInvitation')->name('invitation.update');
    Route::delete('/invitation/{id}', 'InvitationController@deleteInvitation')->name('invitation.delete');
    /** ------------------------- INVITATION Import ------------------------- */
    Route::get('/download', 'InvitationController@download')->name('download.file');
    Route::post('/users/import', 'InvitationController@store')->name('import.store');
    
    /** ------------------------- COMMENT ------------------------- */
    Route::get('comment', 'CommentController@index')->name('comment.index');
    Route::post('comment/{comment}', 'CommentController@update')->name('comment.update');
    /**  ------------------------- Music ------------------------- */
    Route::get('/music', 'MusikController@index')->name('music.index');
    Route::post('/add-music', 'MusikController@store')->name('add-music.store');
    Route::get('/music/{id}', 'MusikController@update');
    Route::delete('/music/{id}', 'MusikController@deleteMusik')->name('music.delete');

    /** ------------------------- MEDIA ------------------------- */
    Route::post('/media/store', 'MediaController@store')->name('media.store');
    Route::delete('/media/destroy/{media}', 'MediaController@destroy')->name('media.destroy');
});
Route::get('/wedding/package', function () {
    return view('pages.package.index');
});

/**  ------------------------- EVENT ------------------------- */
Route::post('event/date', 'EventController@updateDate')->name('event.date.update');
Route::delete('event/destroy/byDate', 'EventController@destroyByDate')->name('event.destroy.bydate');
Route::get('/event/all', 'EventController@showAll')->name('event.showAll');
Route::resource('event', 'EventController')->except(['index']);

/** ------------------------- INVITATION ------------------------- */
Route::post('/{wedding}/invitation/{code}/rsvp', 'InvitationController@show')->name('invitation.rsvp');
Route::post('/{wedding}/rsvp/{code}/confirm', 'InvitationController@rsvp')->name('rsvp.confirm');
Route::post('/invitation/{invitation}/count', 'InvitationController@count')->name('rsvp.count');

/** ------------------------- COMMENT ------------------------- */
Route::post('/invitation/{invitation}/comment', 'CommentController@store')->name('comment.post');
Route::delete('/invitation/comment/{comment}', 'CommentController@destroy')->name('comment.delete');

/** ------------------------- WEDDING ------------------------- */
Route::post('wedding', 'WeddingController@store')->name('wedding.store'); // on SESSION
Route::match(['get', 'post'], 'wedding/storedb', 'WeddingController@storeDB')->name('wedding.storeDB')->middleware('auth');
Route::get('wedding/create', 'WeddingController@create')->name('wedding.create');
Route::get('/{wedding}/{code?}', 'WeddingController@showPublic')->name('wedding.page');
