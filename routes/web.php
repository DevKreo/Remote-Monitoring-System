<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\AppealListController;
use App\Http\Controllers\TemplateReportController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\DevicesBoundController;
use App\Http\Controllers\SendingReportsController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\OpearationalSummaryController;
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

Route::get('/referenceBooks/regions',[DictionaryController::class, 'regionGetData']);
Route::get('/referenceBooks/type_devices',[DictionaryController::class, 'deviceTypeGetData']);
Route::get('/referenceBooks/type_violation',[DictionaryController::class, 'violationTypeGetData']);
Route::get('/referenceBooks/device_developer',[DictionaryController::class, 'developerGetData']);
Route::get('/referenceBooks/adress',[DictionaryController::class, 'addressGetData']);
Route::get('/referenceBooks/error_device',[DictionaryController::class, 'errorsGetData']);
Route::get('/referenceBooks/branches',[DictionaryController::class, 'SNMPbranchesGetData']);
Route::get('/calendar/movable',[CalendarController::class, 'movableGetData']);
Route::get('/calendar/static',[CalendarController::class, 'staticGetData']);
Route::get('/apealsList',[AppealListController::class, 'index']);
Route::get('/report',[TemplateReportController::class, 'index']);
Route::get('/operationalSummary',[OpearationalSummaryController::class, 'index']);//TODO: second page Нарушения/проезды + график
Route::get('/users',[UserController::class, 'userGetData']);
Route::get('/roles',[UserController::class, 'rolesGetData']);
Route::get('/devices',[DevicesController::class, 'deviceGetData']);//TODO: second page
Route::get('/boundary',[DevicesBoundController::class, 'index']);//TODO: second page
Route::get('/history',[LogsController::class, 'index']);
Route::get('/consolidatedReport',[SendingReportsController::class, 'index']);
Route::get('/map',[MapController::class, 'deviceBoundGetData']);
Route::get('/historyMap',[MapController::class, 'boundGetData']);
Route::get('/',[WorkspaceController::class, 'index']);














