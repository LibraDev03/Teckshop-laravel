<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order() {
        $orders = Order::orderBy('id','DESC')->paginate(5);
        return view('admin.order.index', compact('orders'));
    }
    public function details(Order $order) {
        return view('admin.order.details', compact('order'));
    }
}
