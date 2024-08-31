<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AttendanceController;

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

//ユーザー新規登録
// Route::get('/register', [RegisteredUserController::class, 'create']);
// Route::post('/register', [RegisteredUserController::class, 'store']);
//ユーザー認証
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'index']);
    //勤怠ページ
    Route::get('/attendance', [AttendanceController::class, 'index']);
    Route::get('/', [AttendanceController::class, 'index']);
    //出退勤打刻
    Route::post('/attendance/start', [AttendanceController::class, 'store']);
    Route::post('/attendance/end', [AttendanceController::class, 'update']);
    //休憩打刻
    Route::post('break/start', [AttendanceController::class, 'store']);
    Route::post('break/end', [AttendanceController::class, 'update']);
});
