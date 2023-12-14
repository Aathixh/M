<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('home.register');
    }

    public function register(Request $request)
    {
        $request->validate(['name' => 'required']);
        $request->validate(['email' => 'required']);
        $request->validate(['phn_num' => 'required']);
        $request->validate(['password' => 'required|confirmed']);
        $request->validate(['password_confirmation' => 'required']);
        try {
            $newuser = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'phn_num' => $request->input('phn_num'),
            ]);
            return redirect('/signin');
        } catch (\Exception $e) {
            // return back()->withErrors(['Invalid credentials!']);
            return redirect()->route('signup')->withErrors(['Invalid credentials!']);
        }
    }

    public function AdminRegister(Request $request)
    {
        $request->validate(['name' => 'required']);
        $request->validate(['email' => 'required']);
        $request->validate(['phn_num' => 'required']);
        $request->validate(['password' => 'required|confirmed']);
        $request->validate(['password_confirmation' => 'required']);
        try {
            $newuser = Admin::create([
                'Admin_name' => $request->input('name'),
                'Admin_email' => $request->input('email'),
                'Admin_password' => Hash::make($request->input('password')),
                'Admin_phn_num' => $request->input('phn_num'),
            ]);
            return redirect('/admin');
        } catch (\Exception $e) {
            return view('administrator.adminlogin')->withErrors(['Invalid credentials!']);
        }
    }
}

