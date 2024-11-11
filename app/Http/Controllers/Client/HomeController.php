<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {
        // truy vấn sản phẩm ra trang home
        $news_products = Product::orderBy('created_at','DESC')->limit(6)->get();
        $feature_product = Product::inRandomOrder()->limit(8)->get();
        return view('client.home',compact('news_products', 'feature_product'));
    }

    public function search(Category $cat) {
        if($key = request()->key){
            $data = Product::where('name', 'like', '%'.$key.'%')->orderBy('id', 'DESC')->get();
        } 

        // dd($data);

        $products = $cat->products()->inRandomOrder()->paginate(9);
        $news_products = Product::orderBy('created_at', 'DESC')->limit(3)->get()->shuffle();
        $feature_product = Product::inRandomOrder()->limit(6)->get();
        return view('client.search',compact('data','products','news_products','feature_product'));
    }

    public function shop(Category $cat) {
        $products = Product::all();
        $news_products = Product::orderBy('created_at', 'DESC')->limit(3)->get()->shuffle();
        $feature_product = Product::inRandomOrder()->limit(6)->get();
        return view('client.shop', compact('cat','products','news_products','feature_product'));
    }

    public function category(Category $cat) {
        // 2 kiểu truy vấn 1 là bắt đầu từ $product 2 là bắt đầu từ model category
        // $products = Product::where('category_id', $cat->id)->get();
        $products = $cat->products()->inRandomOrder()->paginate(9);
        $news_products = Product::orderBy('created_at', 'DESC')->limit(3)->get()->shuffle();
        $feature_product = Product::inRandomOrder()->limit(6)->get();
        return view('client.category' , compact('cat','products','news_products','feature_product'));
    }

    public function product(product $product) {
        // truy vấn các sản phẩm liên quan đến sản phẩm hiện tại muốn xem chi tiết
        $products = Product::where('category_id', $product->category_id )->limit(6)->get();
        $comments = Comment::where('product_id', $product->id)->orderBy('id','DESC')->get();
        return view('client.product', compact('product','products','comments'));
    }

    public function comment(Product $product) {
        $data = request()->all();
        $data['product_id'] = $product->id;
        $data['user_id'] = auth()->id();

        // dd($data);
        if(Comment::create($data)){
            return redirect()->back();
        }
    }
    
    public function favorite(Product $product) {
        if(Auth::check()){
            $data = [
                'product_id' => $product->id,
                'user_id' => auth()->user()->id
            ];
            // dd($data);
    
            $favorited = Favorite::where(['product_id'=> $product->id , 'user_id'=> auth()->user()->id])->first();
            if($favorited) {
                $favorited->delete();
                return redirect()->back();
            }else{
                Favorite::create($data);
                return redirect()->back();
            }
        }else{
            return redirect()->back()->with('fail','dang nhap de co the yeu thich');
        }
    }

    public function wishlish() {
        // xác nhận đúng người dùng và đúng wishlish của người dùng 
        $favorites = auth()->user()->favorites;
        return view('client.wishlish', compact('favorites'));
    }

}
