<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('/themes-themes2','themes2Controller');
Route::resource('/themes-themes3','themes3Controller');
Route::resource('/argon-home','ArgonController');
Route::resource('/argon-dashboard','DashboardController');