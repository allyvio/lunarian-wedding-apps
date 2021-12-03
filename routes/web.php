<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/themes2', function () {
    return view('themes.themes2.index');
});
Route::get('/themes3', function () {
    return view('themes.themes3.index');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});
Route::get('/default-theme', function () {
    return view('themes.default.index');
});

/**
 * ------------------------- Fitur INVITATION -------------------------
 */
Route::get('/invitation','InvitationController@index')->name('invitation.index');
Route::post('/add-invitation','InvitationController@addInvitation')->name('invitation.add');
Route::get('/invitation/{id}','InvitationController@getInvitationById')->name('invitation.getbyid');
Route::put('/invitation','InvitationController@updateInvitation')->name('invitation.update');
Route::delete('/invitation/{id}','InvitationController@deleteInvitation')->name('invitation.delete');
/**
 * ------------------------- End Fitur INVITATION -------------------------
 */

/**
 * ------------------------- WEDDING -------------------------
 */
Route::resource('wedding', 'WeddingController')->except([
    'show'
]);
Route::get('/{wedding}', 'WeddingController@show')->name('wedding.page');
Route::get('/{wedding}/{code}', 'WeddingController@show')->name('wedding.invitation');

/**
 * ------------------------- INVITATION -------------------------
 */
Route::post('/{wedding}/invitation/{code}/rsvp', 'InvitationController@show')->name('invitation.rsvp');
Route::post('/{wedding}/rsvp/{code}/confirm', 'InvitationController@rsvp')->name('rsvp.confirm');
Route::post('/invitation/{invitation}/count', 'InvitationController@count')->name('rsvp.count');
