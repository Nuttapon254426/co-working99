<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CoindexController;
use App\Http\Controllers\CokeyController;
use App\Http\Controllers\CologinController;
use App\Http\Controllers\ComainController;
use App\Http\Controllers\CoreportController;
use App\Http\Controllers\CoReserveController;
use App\Http\Controllers\CostatusRoomController;

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

//การสร้าง Route
Route::get('/coindex',[CoindexController::class,'index']);
Route::get('/cokey',[CokeyController::class,'index']);
Route::get('/cologin',[CologinController::class,'index']);
Route::get('/comain',[ComainController::class,'index']);
Route::get('/coreport',[CoreportController::class,'index']);
Route::get('/coreserve',[CoReserveController::class,'index']);
Route::get('/costatusroom',[CostatusRoomController::class,'index']);


