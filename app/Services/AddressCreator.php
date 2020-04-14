<?php

namespace App\Services;

use App\Address;
use Illuminate\Support\Facades\DB;

class AddressCreator
{

    public function store(array $addressData): Address
    {
        $address = new Address();
        if (!$this->emptyAddress($addressData))
            $address = Address::create($addressData);
        return $address;
    }

    public function update(int $id, array $addressData): Address
    {
        $address = Address::find($id);
        if (!is_null($address)) {
            DB::beginTransaction();
                $address->update($addressData);
            DB::commit();
        } else $address = $this->store($addressData);
        return $address;
    }

    private function emptyAddress(array $address): bool
    {
        $address['number'] = is_null($address['number']) ? 0 : $address['number'];
        return (empty($address['zip']) &&
            empty($address['street']) &&
            $this->invalidNumber($address['number']) &&
            empty($address['complement']) &&
            empty($address['neighborhood']) &&
            empty($address['city']) &&
            empty($address['state'])
        ) 
        ? true : false;
    }

    private function invalidNumber(int $number = 0): bool
    {
        return $number === 0 || $number < 0 ? true : false;
    }
}
