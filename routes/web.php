<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.index');
});

// Route::resource('/argon-dashboard', 'DashboardController');

Route::get('/destiny', function () {
    return view('themes.destiny.index');
});
Route::get('/themes3', function () {
    return view('themes.themes3.index');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
})->name('dashboard');
Route::get('/default-theme', function () {
    return view('themes.default.index');
});
Route::get('/wedding/package', function () {
    return view('pages.package.index');
});


/**
 * ------------------------- EVENT -------------------------
 */
Route::post('event/date','EventController@updateDate')->name('event.date.update');
Route::delete('event/destroy/byDate','EventController@destroyByDate')->name('event.destroy.bydate');
Route::resource('event','EventController');

/**
 * ------------------------- INVITATION -------------------------
 */
Route::get('/invitation','InvitationController@index')->name('invitation.index');
Route::post('/add-invitation','InvitationController@addInvitation')->name('invitation.add');
Route::get('/invitation/{id}','InvitationController@getInvitationById')->name('invitation.getbyid');
Route::put('/invitation','InvitationController@updateInvitation')->name('invitation.update');
Route::delete('/invitation/{id}','InvitationController@deleteInvitation')->name('invitation.delete');
Route::post('/{wedding}/invitation/{code}/rsvp', 'InvitationController@show')->name('invitation.rsvp');
Route::post('/{wedding}/rsvp/{code}/confirm', 'InvitationController@rsvp')->name('rsvp.confirm');
Route::post('/invitation/{invitation}/count', 'InvitationController@count')->name('rsvp.count');
/**
 * ------------------------- WEDDING -------------------------
 */
Route::resource('wedding', 'WeddingController')->except([
    'show'
]);
Route::get('/{wedding}/{code?}', 'WeddingController@show')->name('wedding.page');

// Route::get('/{wedding}/{code}', 'WeddingController@show')->name('wedding.invitation');
