<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersFormRequest;
use App\UserAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('register.index');
    }

    public function store(UsersFormRequest $usersFormRequest) 
    {
        $data = $usersFormRequest->except(['_token', 'password_confirmation']);
        $data['password'] = Hash::make($data['password']);
        $user = UserAuth::create($data);
        Auth::login($user);
        return redirect()->route('users.index');
    }
}
