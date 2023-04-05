<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    //
    public function login()
    {
        # code...
        return view('login');
    }

    public function authentication(Request $request)
    {
        # code...
        $credentials = $request->validate([
            'email' => ['requreide', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            # code...
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        Session::flash('status', 'failed');
        Session::flash('messege', 'login wrong!');
        return redirect('login');
    }
}
