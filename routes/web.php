<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\PaymentsController;
use App\Http\Middleware\Authenticate;
use Faker\Provider\ar_EG\Payment;
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

Route::get('/authen/login' , [AuthController::class, 'login'] )->name('authen.login');
Route::post('/authen/login' , [AuthController::class, 'check_login']);

Route::get('/authen/register' , [AuthController::class, 'register'] )->name('authen.register');
Route::post('/authen/register' , [AuthController::class, 'check_register']);

Route::get('/authen/logout' , [AuthController::class , 'logout'])->name('authen.logout');

// Nhóm route này để làm đăng kí đăng nhập và đăng xuất cho người dùng
Route::group(['prefix' => 'authen' , 'middleware'=> 'auth'], function() {
    Route::get('/', [AuthController::class, 'authen']  )->name('authen.authen');

    Route::get('/change_password' , [AuthController::class , 'change_password'] )->name('authen.change_password');
    Route::post('/change_password' , [AuthController::class , 'check_change_password'] );

    route::get('/profile', [AuthController::class, 'profile'])->name('authen.profile');
});

// Nhóm route này để có thể vào dashboard cho admin 
Route::group(['prefix' => 'admin',"middleware" => "checkAdmin"], function() {
    Route::get('/', [DashboardController::class , 'dashboard'])->name('admin.dashboard'); 

    Route::get('/order', [OrderController::class, 'order'])->name('admin.order');
    Route::get('/details/{order}', [OrderController::class, 'details'])->name('admin.details');

    Route::resources([
        'user' => UserController::class,
        'category' => CategoryController::class,
        'product' => ProductController::class
    ]);
});

// Nhóm route này để vào client cho người dùng
Route::group(['prefix' =>'client'], function() {
    Route::get('/', [HomeController::class , 'home'])->name('admin.home');
    Route::get('/search', [HomeController::class, 'search'])->name('admin.search');

    Route::get('/blog' , function(){ return view('client.blog'); })->name('client.blog');
    Route::get('/about' , function(){ return view('client.about'); })->name('client.about');
    Route::get('/contact' , function(){ return view('client.contact');})->name('client.contact');
    
    // truy vấn category ra ngoài client theo id của nó
    Route::get('/category/{cat}', [HomeController::class, 'category'])->name('client.category');
    // chi tiết sản phầm ra ngoài client theo id của nó
    Route::get('/product/{product}', [HomeController::class, 'product'])->name('client.product');
    
    Route::post('/comment/{product}', [HomeController::class, 'comment'])->name('client.comment');
    
    Route::get('/favorite/{product}', [HomeController::class, 'favorite'])->name('client.favorite');
    Route::get('/wishlish', [HomeController::class, 'wishlish'])->name('client.wishlish');


    Route::group(['prefix'=> 'cart'], function(){
        Route::get('/', [CartController::class, 'index'])->name('client.cart.index');
        Route::get('/add/{product}', [CartController::class, 'add'])->name('client.cart.add');
        Route::get('/update/{product}', [CartController::class, 'update'] )->name('client.cart.update');
        Route::get('/delete/{product}', [CartController::class, 'delete'])->name('client.cart.delete');
    });

    Route::group(['prefix' => 'order'], function() {
        Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('client.checkout');
        Route::get('/history', [CheckoutController::class, 'history'])->name('client.history');
        Route::get('/detail/{order}', [CheckoutController::class, 'detail'])->name('client.detail');
        Route::post('/checkout', [CheckoutController::class, 'post_checkout']);

    });

    Route::group(['prefix' => 'payments'], function() {
        Route::post('/vnpay_payments', [PaymentsController::class, 'vnpay_payments'])->name('vnpay_payments');
    });
});