<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //
    public function Adminlog()
    {
        return view('administrator.adminlogin');
    }
    public function AdminAuthenticate(Request $request)
    {
        $request->validate([
            'Admin_email' => 'required',
            'Admin_password' => 'required'
        ]);

        $credentials = [
            'Admin_email' => $request->input('Admin_email'),
            'password' => $request->input('Admin_password'),
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            $newAdmin = Auth::user();
            return redirect('/AdminDashboard');
        } else {
            return back()->withErrors(['Invalid credentials!']);
        }
    }
}
