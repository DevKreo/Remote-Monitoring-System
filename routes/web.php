<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\AppealListController;
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

// Route::get('/', function () {
//     return view('pages.workspace');
// });

Route::get('/calendarPage', function () {
    return view('pages.calendarPage');
});

Route::get('/login', function () {
    return view('pages.loginPage');
});

Route::get('/apealsList', function () {
    return view('pages.apealsListPage');
});

Route::get('/report', function () {
    return view('pages.reportTemplatePage');
});

Route::get('/map', function () {
    return view('pages.mapPage');
});
Route::get('/consolidatedReport', function () {
    return view('pages.ConsReportPage');
});
Route::get('/boundary', function () {
    return view('pages.BoundaryPage');
});

Route::get('/devices', function () {
    return view('pages.devicesPage');
});

Route::get('/referenceBooks', function () {
    return view('pages.referenceBooksPage');
});

Route::get('/users', function () {
    return view('pages.usersPage');
});

Route::get('/operationalSummary', function () {
    return view('pages.operationalSummaryPage');
});

Route::get('/history', function () {
    return view('pages.operationHistoryPage');
});

Route::get('referenceBooks',[RegionController::class, 'index']);
Route::get('users',[UserController::class, 'index']);
//Route::get('apealsList',[AppealListController::class, 'index']);
//Route::get('calendarPage',[WorkspaceCalendarController::class, 'index']);
//Route::get('',[WorkspaceController::class, 'index']);
