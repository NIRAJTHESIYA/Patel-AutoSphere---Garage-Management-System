<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Mail\OtpMail;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('Authentication.Registration.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullName' => 'required|string|max:255',
            'emailAddress' => 'required|email|unique:customer,email|max:255',
            'loginPassword' => 'required|min:6',
            'agree' => 'accepted',
        ]);

        $otp = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        $expiresAt = Carbon::now()->addSeconds(120);


        $request->session()->put('registrationData', [
            'fullName' => $validatedData['fullName'],
            'emailAddress' => $validatedData['emailAddress'],
            'password' => Hash::make($validatedData['loginPassword']),
            'otp' => $otp,
            'otp_expires_at' => $expiresAt->timestamp,
        ]);

        Mail::to($validatedData['emailAddress'])->send(new OtpMail($otp));

        return redirect()->route('otp.verify')->with('success', 'OTP sent! Please check your email.');
    }

    public function showOtpForm()
    {
        return view('Authentication.OTP.index');
    }

    public function verifyOtp(Request $request){
    $request->validate([
        'otp.*' => 'required|numeric|digits:1',
    ]);

    $sessionData = $request->session()->get('registrationData');

    $inputOtp = implode('', $request->otp);
    \Log::info('Session OTP: ' . ($sessionData['otp'] ?? 'No session data'));
    \Log::info('Input OTP: ' . $inputOtp);

    if (!$sessionData) {
        return redirect()->route('register')->withErrors(['otp' => 'Session expired. Please register again.']);
    }

    $otpExpiresAt = Carbon::createFromTimestamp($sessionData['otp_expires_at']);

    if (Carbon::now()->gt($otpExpiresAt)) {
        $request->session()->forget('registrationData');
        return redirect()->route('register')->withErrors(['otp' => 'Your OTP has expired. Please try again.']);
    }

    $sessionOtp = (string) $sessionData['otp'];

    if ($sessionOtp === $inputOtp) {
        Customer::create([
            'customer_name' => $sessionData['fullName'],
            'email' => $sessionData['emailAddress'],
            'password' => $sessionData['password'],
        ]);

        $request->session()->forget('registrationData');

        return redirect()->route('Login')->with('success', 'Registration successful! You can now log in.');
    }

    return redirect()->back()->withErrors(['otp' => 'The OTP is invalid. Please try again.']);
    }


}
