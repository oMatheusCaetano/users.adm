<?php

namespace App\Services;

use App\Address;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserCreator
{

    public function storeUser(array $data): User
    {
        DB::beginTransaction();
        $address = $this->createAddress($data);
        $user = User::create([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        $this->createPhone($user, $data['phone']);
        $user->address()->associate($address);
        DB::commit();
        return $user;
    }

    public function createPhone(User $user, $number): void
    {
        $user->phones()->create(['number' => $number]);
    }

    public function createAddress(array $data): Address
    {
        return (new AddressCreator())->storeAddress($data);
    }
}