<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\UserAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('login.index');
    }

    public function create()
    {
        return view('login.create');
    }

    public function access(Request $request)
    {
        if(!Auth::attempt($request->only(['email', 'password'])))
            return redirect()->back()->withErrors('E-mail e/ou senha inválidos');
        return redirect()->route('users.index');
    }

    public function register(RegisterFormRequest $registerFormRequest) 
    {
        $data = $registerFormRequest->except(['_token', 'password_confirmation']);
        $data['password'] = Hash::make($data['password']);
        $user = UserAuth::create($data);
        Auth::login($user);
        return redirect()->route('users.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
