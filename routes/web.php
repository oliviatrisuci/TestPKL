<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbMClientController;
use App\Http\Controllers\TbMProjectController;
use App\Http\Controllers\LoginController;

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
Route::get('/backend', function () {
    return view('backend.index');
});
Route::resource('client', TbMClientController::class)->middleware('auth');
Route::resource('project', TbMProjectController::class)->middleware('auth');
Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/logout',[LoginController::class,'logout']);
Route::post('/login',[LoginController::class,'authenticate']);
