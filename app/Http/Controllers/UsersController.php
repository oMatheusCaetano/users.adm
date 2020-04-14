<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Services\UserCreator;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UsersFormRequest;

class UsersController
{

    public function index()
    {
        $users = User::query()->get();
        $loggedUser = Auth::user();
        return view('users.index', compact('users', 'loggedUser'));
    }

    public function create(Request $request)
    {
        $loggedUser = Auth::user();
        $currentRoute = $request->route()->getName();
        $targetRoute =  'users.store';
        return view('users.create', compact('loggedUser', 'currentRoute', 'targetRoute'));
    }

    public function store(UsersFormRequest $usersFormRequest, UserCreator $userCreator)
    {
        $userData = $usersFormRequest->only('name', 'cpf', 'email', 'birthDate', 'password');
        $addressData = $usersFormRequest->only('zip', 'street', 'number', 'complement', 'neighborhood', 'city', 'state');
        $phonesData = $usersFormRequest->only('phones')['phones'];
        $userCreator->store($userData, $phonesData, $addressData);
        return redirect()->route('users.index');
    }

    public function edit(Request $request)
    {
        $loggedUser = Auth::user();
        $baseUser = User::find($loggedUser->id);
        $targetRoute =  'users.update';
        return view('users.create', compact('loggedUser', 'baseUser', 'targetRoute'));
    }

    public function update(UsersFormRequest $usersFormRequest, UserCreator $userCreator)
    {
        $id = $usersFormRequest->user_id;
        $userData = $usersFormRequest->only('name', 'cpf', 'email', 'birthDate', 'password');
        $addressData = $usersFormRequest->only('address_id', 'zip', 'street', 'number', 'complement', 'neighborhood', 'city', 'state');
        $phonesData = $usersFormRequest->only('phones')['phones'];
        $userCreator->update($id, $userData, $phonesData, $addressData);
        return redirect()->route('users.index');
    }
}
