<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('argon.home.index');
});

Route::resource('/themes-themes2', 'themes2Controller');
Route::resource('/themes-themes3', 'themes3Controller');
Route::resource('/argon-dashboard', 'DashboardController');

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});
Route::get('/default-theme', function () {
    return view('themes.default.index');
});
Route::resource('wedding', 'WeddingController')->except([
    'show'
]);

/** 
 * ------------------------- WEDDING -------------------------
 */
Route::get('/{wedding}', 'WeddingController@show')->name('wedding.page');
Route::get('/{wedding}/{code}', 'WeddingController@show')->name('wedding.invitation');

/** 
 * ------------------------- INVITATION -------------------------
 */
Route::post('/{wedding}/invitation/{code}/rsvp', 'InvitationController@show')->name('invitation.rsvp');
Route::post('/{wedding}/rsvp/{code}/confirm', 'InvitationController@rsvp')->name('rsvp.confirm');
Route::post('/invitation/{invitation}/count', 'InvitationController@count')->name('rsvp.count');
