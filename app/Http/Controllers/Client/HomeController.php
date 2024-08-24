<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        // truy vấn sản phẩm ra trang home
        $news_products = Product::orderBy('created_at','DESC')->limit(6)->get();
        $feature_product = Product::inRandomOrder()->limit(8)->get();
        return view('client.home',compact('news_products','feature_product'));
    }

    public function category(Category $cat) {
        // 2 kiểu truy vấn 1 là bắt đầu từ $product 2 là bắt đầu từ model category
        // $products = Product::where('category_id', $cat->id)->get();
        $products = $cat->products()->inRandomOrder()->paginate(9);
        $news_products = Product::orderBy('created_at', 'DESC')->limit(3)->get()->shuffle();
        return view('client.category' , compact('cat', 'products', 'news_products'));
    }
}
