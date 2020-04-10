<?php

namespace App\Http\Controllers;

use App\User;

class UsersController
{

    public function index()
    {
        $users = User::query()->orderBy('name')->get();       
        return view('users.index', compact('users'));
    }
}
