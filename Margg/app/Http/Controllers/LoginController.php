<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('home.Login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $newuser = User::where('email', $email)->first();
            Auth::login($newuser);
            return redirect('/book');
        } else {
            return back()->withErrors(['Invalid credentials!']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/home');
    }

    public function AdminAuthenticate(Request $request)
    {
        $request->validate([
            'Admin_email' => 'required',
            'Admin_password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['Admin_email' => $email, 'Admin_password' => $password])) {
            $newuser = Admin::where('email', $email)->first();
            Auth::login($newuser);
            return redirect('/admin_dashboard');
        } else {
            return back()->withErrors(['Invalid credentials!']);
        }
    }
}
