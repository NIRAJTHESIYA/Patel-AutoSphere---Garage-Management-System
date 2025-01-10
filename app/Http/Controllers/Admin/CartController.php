<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('product')->get();
        return view('Admin.cart', compact('cartItems'));
    }

    public function destroy($id)
    {
        $cartItem = Cart::findOrFail($id);

        $cartItem->delete();

        return redirect()->route('admin.cart')->with('success', 'Item removed from the cart successfully!');
    }
}
