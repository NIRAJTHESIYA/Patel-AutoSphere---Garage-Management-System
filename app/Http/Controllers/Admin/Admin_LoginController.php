<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class Admin_LoginController extends Controller
{
    public function show(){
        return view('Admin.login');
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'required|email',
            'password' => 'required',
        ]);

        $adminCount = Admin::count();

        if ($adminCount == 0) {
            $admin = Admin::create([
                'email' => $request->username,
                'password' => Hash::make($request->password),
            ]);

            Session::put('admin_id', $admin->admin_id);

            return redirect()->route('admin.dashboard')->with('success', 'Admin account created and login successful.');
        }

        $admin = Admin::where('email', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin_id', $admin->admin_id);

            return redirect()->route('admin.dashboard')->with('success', 'Login successful.');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password.');
        }
    }

    public function logout(){
        Session::forget('admin_id');
        return redirect()->route('Admin')->with('success', 'Logout successful.');
    }
}
