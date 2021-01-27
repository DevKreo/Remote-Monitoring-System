<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\SendingReportsController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('pages/work_space',[WorkspaceController::class, 'index']);

Route::get('pages/work_space/count', [WorkspaceController::class, 'Number']);

Route::get('pages/work_space/report/count', [SendingReportsController::class, 'Number']);
Route::get('pages/work_space/users_select', [UserController::class, 'userGetData']);