<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderContorller extends Controller
{
    public function index()
{
    // Fetch all orders with all related customer and product data
    $orders = Order::with(['customer', 'product'])->get();

    // Pass the orders to the view
    return view('Admin.order', compact('orders'));
}

}
