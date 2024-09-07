<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('client.cart');
    }

    public function add(Request $request, Product $product){
        //xử lý số lượng 
        $quantity = $request->quantity ? floor($request->quantity) : 1;
        // xác định 1 sản phẩm chỉ được xuất hiện 1 lần trong giỏ hàng nếu xuất hiện lần 2 thì xử lý thành số lượng
        $cart_exists = Cart::where(['user_id'=> auth()->user()->id, 'product_id'=> $product->id ])->first();

        if($cart_exists){
            // Nếu đã có sản phẩm đó mà thêm vào 1 lần nưã thì xử lí tăng số lượng sản phẩm như sau 
            
            // cách 1 : sử dụng update để tăng thêm đơn vị vào quantity
            // $cart_exists->update([
            //     'quantity' => $cart_exists->quantity + $quantity
            // ]);

            //cách2 :sử dụng hàm dựng sẵn increment để tự động tăng số lượng lên 1
            $cart_exists->increment('quantity', $quantity);

            return  redirect()->route('client.cart.index');
        }else{
            // nếu chưa có sản phẩm đó trong giỏ hàng thì mới tạo mới vào giỏ hàng
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $product->id,
                'price' => $product->price,
                'quantity' => 1
            ];
    
            // dd($data);
    
            if(Cart::create($data)){
                return  redirect()->route('client.cart.index');
            }
            return redirect()->back();
        }

    }

    public function update(Request $request, Product $product){
        
    }

    public function delete(Product $product){
        $product_cart = Cart::where('product_id', $product->id)->first();
        $product_cart->delete();
        return redirect()->back();
    }
}
