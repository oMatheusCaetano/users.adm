<?php

namespace App\Services;

use App\Address;
use Illuminate\Support\Facades\DB;

class AddressCreator
{

    public function storeAddress(array $data): Address
    {
        DB::beginTransaction();
        $user = Address::create([
            'street' => $data['street'],
            'city' => $data['city'],
            'state' => $data['state'],
            'number' => $data['number'],
            'neighborhood' => $data['neighborhood'],
            'zip' => $data['zip'],
            'complement' => $data['complement']
        ]);
        DB::commit();
        return $user;
    }
}