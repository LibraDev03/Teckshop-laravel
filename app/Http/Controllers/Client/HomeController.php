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
        $feature_product = Product::inRandomOrder()->limit(6)->get();
        return view('client.category' , compact('cat', 'products', 'news_products', 'feature_product'));
    }

    public function product(product $product) {
        // truy vấn các sản phẩm liên quan đến sản phẩm hiện tại muốn xem chi tiết
        $products = Product::where('category_id', $product->category_id )->limit(7)->get();
        return view('client.product', compact('product','products'));
    }
}
