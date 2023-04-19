<?php

use App\Http\Controllers\AuthenticationController;
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


Route::group(['prefix' => 'auth'], function () {

Route::get('/dashboard', [AuthenticationController::class, 'dashboard'])->name('auth.dashboard');
Route::get('/cases', [AuthenticationController::class, 'cases'])->name('auth.cases');
Route::get('/clients', [AuthenticationController::class, 'clients'])->name('auth.clients');
Route::get('/data_management', [AuthenticationController::class, 'data_manage'])->name('auth.data_manage');
Route::get('/exports', [AuthenticationController::class, 'exports'])->name('auth.exports');
Route::get('/processes', [AuthenticationController::class, 'process'])->name('auth.process');
Route::get('/vehicles', [AuthenticationController::class, 'vehicles'])->name('auth.vehicles');

});



Route::get('/', [AuthenticationController::class, 'login'])->name('login');
Route::post('/user-login', [AuthenticationController::class, 'userLogin'])->name('user-login');
Route::get('/register', [AuthenticationController::class, 'register'])->name('register');
Route::post('/user-register', [AuthenticationController::class, 'userRegister'])->name('user-register');
Route::get('/logout', [AuthenticationController::class,'logout'])->name('logout');
