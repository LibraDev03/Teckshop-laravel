<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
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

// Nhóm route này để làm đăng kí đăng nhập và đăng xuất cho người dùng
Route::group(['prefix' => 'authen' , 'middleware'=> 'auth'], function() {
    Route::get('/', [AuthController::class, 'authen']  )->name('authen.authen');

    Route::get('/change_password' , [AuthController::class , 'change_password'] )->name('authen.change_password');
    Route::post('/change_password' , [AuthController::class , 'check_change_password'] );
});

// Nhóm route này để có thể vào dashboard cho admin 
Route::group(['prefix' => 'admin',"middleware" => "checkAdmin"], function() {
    Route::get('/', [DashboardController::class , 'dashboard'])->name('admin.dashboard'); 

    Route::resources([
        'user' => UserController::class,
        'category' => CategoryController::class,
        'product' => ProductController::class
    ]);
});

// Nhóm route này để vào client cho người dùng
Route::group(['prefix' =>'client'], function() {
    Route::get('/', [HomeController::class , 'home'])->name('admin.home');

    Route::get('/blog' , function(){ return view('client.blog'); })->name('client.blog');
    Route::get('/about' , function(){ return view('client.about'); })->name('client.about');
    Route::get('/contact' , function(){ return view('client.contact');})->name('client.contact');

    // truy vấn category ra ngoài client theo id của nó
    Route::get('/category/{cat}', [HomeController::class, 'category'])->name('client.category');
    // chi tiết sản phầm ra ngoài client theo id của nó
    Route::get('/product/{product}', [HomeController::class, 'product'])->name('client.product');

});