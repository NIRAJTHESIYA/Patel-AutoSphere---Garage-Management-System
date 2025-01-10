<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class LoginController extends Controller
{
    public function index()
    {
        return view('Authentication.Login.index');
    }

    public function login(Request $request)
    {
        $messages = [
            'emailAddress.required' => 'Please enter your email address.',
            'emailAddress.email' => 'The email address must be a valid email.',
            'loginPassword.required' => 'Please enter your password.',
            'loginPassword.min' => 'Your password must be at least 6 characters long.',
        ];

        $request->validate([
            'emailAddress' => 'required|email',
            'loginPassword' => 'required|min:6',
        ], $messages);

        $credentials = $request->only('emailAddress', 'loginPassword');
        $user = Customer::where('email', $credentials['emailAddress'])->first();

        if ($user && Hash::check($credentials['loginPassword'], $user->password)) {
            $request->session()->put([
                'login' => true,
                'id' => $user->customer_id,
                'fullName' => $user->customer_name,
                'email' => $user->email,
            ]);

            return redirect('/Home');
        } else {
            if (!$user) {
                return back()->with('error', 'No account found with this email. Please register first.');
            } else {
                return back()->with('error', 'Invalid login credentials. Please try again or reset your password.');
            }
        }
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('Login');
    }
}
