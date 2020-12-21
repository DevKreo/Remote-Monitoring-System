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
    return view('pages.index');
});

Route::get('/calendarPage', function () {
    return view('pages.calendarPage');
});

Route::get('/login', function () {
    return view('pages.loginPage');
});

Route::get('/apealsList', function () {
    return view('pages.apealsListPage');
});
