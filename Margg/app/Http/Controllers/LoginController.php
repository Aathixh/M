<?php

namespace App\Http\Controllers;

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

}
