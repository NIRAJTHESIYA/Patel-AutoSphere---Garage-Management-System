<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\Payment;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }

    public function getFormattedDescriptionWithBr($description)
    {
        $topics = preg_split('/(?<=\d\.)\s/', $description);

        $topics = array_filter(array_map('trim', $topics));

        return implode('<br>', $topics);
    }

    public function showProductDetails($productId)
    {
        $product = Product::findOrFail($productId);
        $product->formatted_description = $this->getFormattedDescriptionWithBr($product->description);

        return view('shop.product_view', compact('product'));
    }

    public function cart()
    {
        if (session()->has('login') && session()->get('login')) {
            $customer_id = session()->get('id');

            $cartItems = Cart::where('customer_id', $customer_id)
                ->with('product')
                ->get();

            if ($cartItems->isEmpty()) {
                return view('shop.empty_cart');
            }

            return view('shop.cart', compact('cartItems'));
        }

        return redirect()->route('Login')->with('error', 'Please login to access your cart.');
    }


    public function addToCart(Request $request)
    {
        if (!session()->has('login') || !session()->get('login')) {
            return redirect()->back()->with('error', 'You must be logged in to add products to the cart.');
        }

        $customer_id = session()->get('id');
        $product_id = $request->product_id;
        $quantity = $request->quantity;

        $product = Product::find($product_id);
        if (!$product) {
            return back()->with('error', 'Product not found.');
        }

        $cartItem = Cart::where('customer_id', $customer_id)
            ->where('product_id', $product_id)
            ->first();

        if ($cartItem) {
            $cartItem->cart_quantity += $quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'product_id' => $product_id,
                'customer_id' => $customer_id,
                'cart_quantity' => $quantity,
            ]);
        }

        return back()->with('success', 'Product added to cart successfully.');
    }

    public function viewProductDetails($cart_id, $product_id)
    {
        $cart = Cart::where('cart_id', $cart_id)
            ->where('product_id', $product_id)
            ->first();

        if (!$cart) {
            return redirect()->back()->with('error', 'The product is not in your cart.');
        }

        $product = Product::find($product_id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        return view('shop.cart_product_view', compact('product'));

    }

    public function viewCartProductDetails($cart_id, $product_id)
    {
        $cart = Cart::where('cart_id', $cart_id)->where('product_id', $product_id)->with('product')->first();

        if (!$cart) {
            return redirect()->back()->with('error', 'Cart item or product not found.');
        }

        $product = $cart->product;

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        return view('shop.cart_product_view', compact('product'));
    }

    public function removeFromCart($cart_id)
    {
        $cartItem = Cart::find($cart_id);

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->back()->with('success', 'Product removed from cart successfully.'.$cart_id.' ');
        }

        return redirect()->back()->with('error', 'Product not found in the cart.'.$cart_id.' ');
    }

    // public function cart_order(Request $request)
    // {
    //     $customer_id = session()->get('id');

    //     if (!$customer_id) {
    //         return redirect()->back()->with('error', 'User not found');
    //     }

    //     $cartItems = Cart::where('customer_id', $customer_id)->get();

    //     if ($cartItems->isEmpty()) {
    //         return redirect()->back()->with('error', 'Cart is empty');
    //     }

    //     $token = Str::random(32);

    //     $orderData = [];
    //     $totalAmount = 0;
    //     $cartId = $cartItems->first()->cart_id;

    //     foreach ($cartItems as $item) {
    //         $product = Product::find($item->product_id);

    //         if (!$product) {
    //             return redirect()->back()->with('error', 'Product not found for cart item');
    //         }

    //         $orderData[] = [
    //             'customer_id' => $customer_id,
    //             'product_id' => $item->product_id,
    //             'quantity' => $item->cart_quantity,
    //             'total_price' => $item->cart_quantity * $product->product_price,
    //         ];

    //         $totalAmount += $item->cart_quantity * $product->product_price;
    //     }

    //     Payment::create([
    //         'cart_id' => $cartId,
    //         'token' => $token,
    //     ]);

    //     session()->put('orderData', $orderData);
    //     session()->put('totalAmount', $totalAmount);

    //     return redirect()->route('showpaymentpage', ['token' => $token]);
    // }

    // public function showpaymentpage(Request $request)
    // {
    //     $token = $request->query('token');

    //     if (!$token) {
    //         return redirect()->back()->with('error', 'Payment token is missing.');
    //     }

    //     $payment = Payment::where('token', $token)->first();

    //     if (!$payment) {
    //         return redirect()->back()->with('error', 'Invalid or expired payment token.');
    //     }

    //     $orderData = session()->get('orderData');
    //     $totalAmount = session()->get('totalAmount');

    //     return view('shop.payment', compact('token', 'orderData', 'totalAmount', 'payment'));
    // }


    public function cart_order()
    {
        // Retrieve customer ID from the session
        $customer_id = session()->get('id');

        if (!$customer_id) {
            return redirect()->back()->with('error', 'User not found');
        }

        // Fetch all items in the customer's cart
        $cartItems = Cart::where('customer_id', $customer_id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Cart is empty');
        }

        $token = null; // Initialize token variable

        foreach ($cartItems as $item) {
            // Fetch product details from the products table
            $product = Product::find($item->product_id);

            if (!$product) {
                return redirect()->back()->with('error', 'Product not found for cart item');
            }

            $payment = Payment::create([
                'cart_id' => $item->cart_id,
                'payment_status' => 1, 
                'razorpay_payment_id' => null, // Default value, will be updated after payment
                'token' => uniqid(), // Generate a unique token
            ]);

            $token = $payment->token;

            Order::create([
                'customer_id' => $customer_id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'total_price' => $item->quantity * $product->product_price,
                'payment_id' => $payment->payment_id,
            ]);
        }

        Cart::where('customer_id', $customer_id)->delete();

        return redirect()->route('payment.page', ['token' => $token])->with('success', 'Order placed successfully. Please proceed with payment.');
    }

    public function showpaymentpage($token)
    {
        $payment = Payment::where('token', $token)->first();

        if (!$payment) {
            return redirect()->back()->with('error', 'Invalid payment token');
        }

        return view('shop.payment', ['payment' => $payment]);
    }
}
