<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }

    

    public function store(Request $request){
        
    }


    public function authenticated(Request $request)
    {
        $request->validate([
            'email'   => 'required|email',
            'password' => 'required',
        ]);

        $credentianl = $request->only('email', 'password');

        if (Auth::attempt($credentianl)) {
            $request->Session()->regenerate();
            return redirect('/admin/dashboard');
        }

        return back()->withErrors([
            'loginError' => 'Email atau Passord Salah'
        ]);
    }
}
