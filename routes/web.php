<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.index');
});
Route::get('google', 'GoogleController@redirect');
Route::get('auth/google/callback', 'GoogleController@callback');

Auth::routes();
Route::prefix('dashboard')->middleware(['auth', 'wedding'])->group(function () {
    Route::get('/', function () {
        return view('pages.dashboard.index');
    })->name('dashboard');
    // Route::get('/home', 'HomeController@index')->name('home');

    /** ------------------------- WEDDING ------------------------- */
    Route::resource('/wedding', 'WeddingController')->except([
        'show', 'store', 'create'
    ]);
    Route::post('/wedding/update-photos/{wedding}', 'WeddingController@updateCouplePhoto')->name('wedding.update.photos');
    Route::delete('/wedding/delete-photos/{wedding}', 'WeddingController@destroyCouplePhoto')->name('wedding.destroy.photos');

    /** STORY */
    Route::get('/story','StoryController@index')->name('story.index');
    Route::post('/story','StoryController@store')->name('story.store');
    Route::get('/story/{id}','StoryController@show')->name('story.show');
    Route::put('/story/{id}/update','StoryController@update')->name('story.update');
    Route::delete('/story/{id}','StoryController@destroy')->name('story.delete');
    /**  ------------------------- EVENT ------------------------- */
    Route::get('/event', 'EventController@index')->name('event.index');

    /** ------------------------- INVITATION ------------------------- */
    Route::get('/invitation', 'InvitationController@index')->name('invitation.index');
    Route::post('/add-invitation', 'InvitationController@addInvitation')->name('invitation.add');
    Route::get('/invitation/{id}', 'InvitationController@getInvitationById')->name('invitation.getbyid');
    Route::put('/invitation', 'InvitationController@updateInvitation')->name('invitation.update');
    Route::delete('/invitation/{id}', 'InvitationController@deleteInvitation')->name('invitation.delete');
    /** ------------------------- INVITATION Import ------------------------- */
    Route::get('/download', 'InvitationController@download')->name('download.file');
    Route::post('/users/import', 'InvitationController@store')->name('import.store');

    /**  ------------------------- Music ------------------------- */
    Route::get('/music', 'MusikController@index')->name('music.index');
    Route::post('/add-music', 'MusikController@store')->name('add-music.store');
    Route::get('/music/{id}', 'MusikController@update');
    Route::delete('/music/{id}', 'MusikController@deleteMusik')->name('music.delete');

    /** MEDIA  */
    Route::post('/media/store', 'MediaController@store')->name('media.store');
    Route::delete('/media/destroy/{media}', 'MediaController@destroy')->name('media.destroy');
});
// Route::get('/wedding/package', function () {
//     return view('pages.package.index');
// });

/**  ------------------------- EVENT ------------------------- */
Route::post('event/date', 'EventController@updateDate')->name('event.date.update');
Route::delete('event/destroy/byDate', 'EventController@destroyByDate')->name('event.destroy.bydate');
Route::get('/event/all', 'EventController@showAll')->name('event.showAll');
Route::resource('event', 'EventController')->except(['index']);

/** ------------------------- INVITATION ------------------------- */
Route::post('/{wedding}/invitation/{code}/rsvp', 'InvitationController@show')->name('invitation.rsvp');
Route::post('/{wedding}/rsvp/{code}/confirm', 'InvitationController@rsvp')->name('rsvp.confirm');
Route::post('/invitation/{invitation}/count', 'InvitationController@count')->name('rsvp.count');

/** ------------------------- WEDDING ------------------------- */
Route::post('wedding', 'WeddingController@store')->name('wedding.store'); // on SESSION
Route::match(['get', 'post'], 'wedding/storedb', 'WeddingController@storeDB')->name('wedding.storeDB')->middleware('auth');
Route::get('wedding/create', 'WeddingController@create')->name('wedding.create');
Route::get('/{wedding}/{code?}', 'WeddingController@show')->name('wedding.page');
