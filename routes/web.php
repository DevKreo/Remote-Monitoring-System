<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\AppealListController;
use App\Http\Controllers\TemplateReportController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\DevicesBoundController;
use App\Http\Controllers\SendingReportsController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\CalendarMovableComplexController;
use App\Http\Controllers\OpearationalPerfomanceSummaryController;
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

//  Route::get('/calendarPage', function () {
//     return view('pages.calendarPage');
// });

Route::get('/login', function () {
    return view('pages.loginPage');
});

// Route::get('/apealsList', function () {
//     return view('pages.apealsListPage');
// });

// Route::get('/report', function () {
//     return view('pages.reportTemplatePage');
// });

// Route::get('/map', function () {
//     return view('pages.mapPage');
// });
// Route::get('/consolidatedReport', function () {
//     return view('pages.ConsReportPage');
// });
// Route::get('/boundary', function () {
//     return view('pages.BoundaryPage');
// });

// Route::get('/devices', function () {
//     return view('pages.devicesPage');
// });

// Route::get('/referenceBooks', function () {
//     return view('pages.referenceBooksPage');
// });

// Route::get('/users', function () {
//     return view('pages.usersPage');
// });

// Route::get('/operationalSummary', function () {
//     return view('pages.operationalSummaryPage');
// });

// Route::get('/history', function () {
//     return view('pages.operationHistoryPage');
// });

Route::get('/referenceBooks',[RegionController::class, 'index']);
Route::get('/users',[UserController::class, 'index']);
Route::get('/report',[TemplateReportController::class, 'index']);
Route::get('/boundary',[DevicesBoundController::class, 'index']);
Route::get('/devices',[DevicesController::class, 'index']);
Route::get('/apealsList',[AppealListController::class, 'index']);
Route::get('/calendarPage',[CalendarMovableComplexController::class, 'index']);
Route::get('/',[WorkspaceController::class, 'index']);
Route::get('/consolidatedReport',[SendingReportsController::class, 'index']);
Route::get('/history',[LogsController::class, 'index']);
Route::get('/map',[MapController::class, 'index']);
Route::get('/operationalSummary',[OpearationalPerfomanceSummaryController::class, 'index']);
