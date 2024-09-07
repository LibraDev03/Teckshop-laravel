<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Favorite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // truyền dữ liệu ra ngoài trang client (coi như biến toàn cục global)
        view()->composer('*', function($view){
            $cats_home = Category::orderBy('name','DESC')->get();
            $wishlist = Favorite::where('user_id', auth()->id())->get();
            $carts = Cart::where('user_id', auth()->id())->get();
            $view->with(compact('cats_home','carts','wishlist'));
        });
    }
}
