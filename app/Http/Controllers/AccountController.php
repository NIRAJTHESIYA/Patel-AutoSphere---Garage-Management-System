<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{

    public function show()
    {
        $id = session('id');
        $customer = Customer::find($id);
        return view('Authentication.Account.account', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        if (!$customer) {
            return redirect()->back()->with('error', 'Customer not found.');
        }

        $validatedData = $request->validate([
            'username'    => 'required|string|max:20',
            'first_name'  => 'required|string|max:20',
            'last_name'   => 'required|string|max:20',
            'email'       => 'required|email|max:40|unique:customer,email,' . $id . ',customer_id',
            'phone'       => 'required|digits:10|regex:/^[0-9]{10}$/',
            'address'     => 'required|string|max:500',
            'city'        => 'required|string|max:255',
            'pincode'     => 'required|digits:6',
        ]);

        try {
            $customer->customer_name = $validatedData['username'];
            $customer->first_name    = $validatedData['first_name'];
            $customer->last_name     = $validatedData['last_name'];
            $customer->email         = $validatedData['email'];
            $customer->contact_no    = $validatedData['phone'];
            $customer->address       = $validatedData['address'];
            $customer->city          = $validatedData['city'];
            $customer->pincode       = $validatedData['pincode'];

            $customer->save();

            return redirect()->route('account', ['id' => $id])->with('success', 'Account details updated successfully.');
        } catch (\Exception $e) {
            \Log::error('Account Update Error: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Failed to update account details. Please try again.');
        }
    }

    public function appointment_history(Request $request)
{
    $customerId = $request->session()->get('id');

    if (!$customerId) {
        return redirect()->route('Login')->with('error', 'Please log in to view your appointment history.');
    }

    // Fetch the appointments for the logged-in customer
    $appointments = Appointment::where('customer_id', $customerId)
        ->with('customer')
        ->get();

    if ($appointments->isEmpty()) {
        return view('Authentication.Account.appointment_history', [
            'appointments' => [],
            'message' => 'No appointments found for this customer.',
        ]);
    }

    return view('Authentication.Account.appointment_history', compact('appointments'));
}


    public function order_history(Request $request)
    {
        $customerId = $request->session()->get('id');

        // dd($customerId);

        if (!$customerId) {
            return redirect()->route('Login')->with('error', 'Please log in to view your order history.');
        }

        $orders = Order::where('customer_id', $customerId)
            ->with(['customer', 'product'])
            ->get();

            if ($orders->isEmpty()) {
                return view('Authentication.Account.order_history', [
                    'orders' => [],
                    'message' => 'No orders found for this customer.',
                ]);
            }

            return view('Authentication.Account.order_history', compact('orders'));
    }

    public function deleteAccount(Request $request, $id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            return redirect()->back()->with('error', 'User not found');
        }

        $customer->delete();

        Auth::logout();

        $request->session()->invalidate();

        return redirect()->route('Login')->with('success', 'Account deleted successfully. You have been logged out.');
    }

}
