<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Contracts\Session\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 2route này để làm đăng nhập và check lại đăng nhập (để bên ngoài route authen vì phải đăng nhập ms qua đc authen)
Route::get('/authen/login' , [AuthController::class, 'login'] )->name('authen.login');
Route::post('/authen/login' , [AuthController::class, 'check_login']);

// 2route này để làm đăng kí và check lại đăng kí (để bên ngoài route authen vì phải đăng nhập ms qua đc authen)
Route::get('/authen/register' , [AuthController::class, 'register'] )->name('authen.register');
Route::post('/authen/register' , [AuthController::class, 'check_register']);

// route làm đăng xuất 
Route::get('/authen/logout' , [AuthController::class , 'logout'])->name('authen.logout');

// Nhóm route này để làm đăng kí đăng nhập và đăng xuất cho người dùng và admin
Route::group(['prefix' => 'authen' , 'middleware'=> 'auth'], function() {
    Route::get('/', [AuthController::class, 'authen']  )->name('authen.authen');
});

// Nhóm route này để có thể vào dashboard cho admin 
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [DashboardController::class , 'dashboard'])->name('admin.dashboard'); 

    Route::resources([
        'user' => UserController::class
    ]);
});

// Nhóm route này để vào client cho người dùng
Route::group(['prefix' =>'client'], function() {
    Route::get('/', [HomeController::class , 'home'])->name('admin.home');
});