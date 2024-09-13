<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
        
        return view('client.checkout');
    }

    public function post_checkout(Request $request){
        $request->validate([
            'name_orderer' => 'required|max:100',
            'name_consignee' => 'required|max:100',
            'phone_consignee' => 'required|digits:10|numeric',
            'email_orderer' => 'required|max:100|email',
            'address_consignee' => 'required|max:250',
            'order_notes' => 'max:500',
            'payment_method'=> 'required'
        ]);

        $data = $request->only('name_orderer','name_consignee', 'phone_consignee', 'email_orderer', 'address_consignee', 'order_notes', 'payment_method');
        $data['user_id'] = auth()->user()->id;

        // dd($data);

        if($order = Order::create($data) ){
            foreach(auth()->user()->cartss as $items){
                $data1 = [
                    'order_id' => $order->id,
                    'product_id' => $items->product_id,
                    'price' => $items->price,
                    'quantity' => $items->quantity,
                    'total' => $items->price * $items->quantity
                ];

                OrderItem::create($data1);

            }
            
            foreach (auth()->user()->cartss as $cartItem) {
                $cartItem->delete();
            }
        }

        return redirect()->route('admin.home');
    }
}
