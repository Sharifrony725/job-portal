<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;

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
//     return view('welcome');
// });
Route::get('/', [JobController::class, 'welcome'])->name('home');
#jobs
Route::resource('/jobs', JobController::class);
#users
Route::resource('/users',UserController::class);
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'loginSubmit'])->name('login.submit');
Route::get('/logout',[UserController::class, 'logout'])->name('logout');
