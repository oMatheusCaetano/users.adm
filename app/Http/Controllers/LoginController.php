<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('login.index');
    }

    public function access(Request $request)
    {
        if(!Auth::attempt($request->only(['email', 'password'])))
            return redirect()->back()->withErrors('E-mail e/ou senha inválidos');
        return redirect()->route('users.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
