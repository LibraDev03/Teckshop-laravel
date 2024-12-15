<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $user = User::all();
        $category = Category::all();
        $product = Product::all();
        $order = Order::all();
        return view('admin.dashboard', compact('user','category','product','order'));
    }
}
