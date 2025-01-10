<?php


namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function index() {
        return view("Authentication.Forgot.index");
    }

    public function sendResetLink(Request $request) {
        $request->validate([
            'emailAddress' => 'required|email',
        ]);

        $email = $request->input('emailAddress');

        $customer = Customer::where('email', $email)->first();

        if (!$customer) {
            return back()->withErrors(['emailAddress' => 'This email address is not registered in our system.']);
        }

        $token = Str::random(60);

        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => now(),
        ]);

        $resetLink = route('resetPassword', ['token' => $token]);

        Mail::send('Authentication.Forgot.password_reset', ['resetLink' => $resetLink], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Reset your password');
        });

        return back()->with('success', 'A password reset link has been sent to your email address.');
    }

    public function showResetForm($token) {
        return view('Authentication.Reset.index', ['token' => $token]);
    }

    public function resetPassword(Request $request) {
        $request->validate([
            'token' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $resetRecord = DB::table('password_resets')->where('token', $request->input('token'))->first();

        if (!$resetRecord) {
            return back()->withErrors(['token' => 'Invalid or expired token.']);
        }

        Customer::where('email', $resetRecord->email)->update([
            'password' => bcrypt($request->input('password')),
        ]);

        DB::table('password_resets')->where('email', $resetRecord->email)->delete();

        return redirect()->route('Login')->with('success', 'Your password has been successfully reset.');
    }
}
