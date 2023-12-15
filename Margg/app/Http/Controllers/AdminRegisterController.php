<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    //

    public function Adminreg()
    {
        return view('administrator.register');
    }

    public function AdminRegister(Request $request)
    {
        $request->validate([
            'Admin_name' => 'required',
            'Admin_email' => 'required|email',
            'Admin_phn_num' => 'required|numeric',
            'password' => 'required|confirmed',
        ]);

        try {
            $newadmin = Admin::create([
                'Admin_name' => $request->input('Admin_name'),
                'Admin_email' => $request->input('Admin_email'),
                'password' => Hash::make($request->input('password')),
                'Admin_phn_num' => $request->input('Admin_phn_num'),
            ]);
            return redirect('/AdminSignin');
        } catch (\Exception $e) {
            // return back()->withErrors(['Invalid credentials!']);
            return redirect()->route('regpage')->withErrors(['Invalid credentials!']);
        }
    }
}
