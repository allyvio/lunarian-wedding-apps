<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('argon.home.index');
});

// Route::resource('/argon-dashboard', 'DashboardController');

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
