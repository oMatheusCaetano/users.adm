<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class UsersController
{

    public function index()
    {
        $users = User::query()->orderBy('name')->get();
        $logedUser = Auth::user();
        return view('users.index', compact('users', 'logedUser'));
    }
}
