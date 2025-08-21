<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            // Set session admin_logged_in
            $request->session()->put('admin_logged_in', true);
            $_SESSION['admin_logged_in'] = true;
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function dashboard()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.dashboard', compact('admin'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // Hapus session admin_logged_in
        unset($_SESSION['admin_logged_in']);
        return redirect()->route('admin.login');
    }
    
    public function produkHukum()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.admin-produkhukum', compact('admin'));
    }
}
