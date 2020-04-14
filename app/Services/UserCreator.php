<?php

namespace App\Services;

use App\User;
use Illuminate\Support\Facades\DB;

class UserCreator
{

    public function store(array $userData, array $phonesData, array $addressData): User
    {
        DB::beginTransaction();
            $user = User::create($userData);
            $this->setPhones($user, $phonesData);
            $this->setAddress($user, $addressData);
        DB::commit();
        return $user;
    }

    public function update(int $id, array $userData, array $phonesData, array $addressData): User
    {
        $user = User::find($id);
        if (!is_null($user)) {
            DB::beginTransaction();
                $user->update($userData);
                $this->updatePhones($user, $phonesData);
                $this->defineAddress($user, $addressData);
            DB::commit();
        } else $user = new User();
        return $user;
    }

    private function updatePhones(User $user, array $phonesData)
    {
        foreach ($user->phones as $phone) {
            $phone->delete();
        }
        $this->setPhones($user, $phonesData);
    }

    private function setPhones(User $user, array $phones): void
    {            
        foreach ($this->validatePhones($phones) as $phone) {
            $user->phones()->create(['number' => $phone]);
        }
    }

    private function validatePhones(array $phonesData): array
    {
        $phones = [];
        foreach ($phonesData as $phone) {
            if ($phone === '' || $phone === null) continue;
            $phones[] = $phone;
        }
        return $phones;
    }

    private function setAddress(User $user, array $addressData): void
    {
        $address = (new AddressCreator())->store($addressData);
        if (is_null($address->id)) return;
        $user->address_id = $address->id;
        $user->save();
    }

    private function defineAddress(User $user, array $addressData): void
    {
        $user->address_id = is_null($user->address_id) ? 0 : $user->address_id;
        $address = (new AddressCreator())->update($user->address_id, $addressData, $user);
        if (is_null($address->id)) return;
        $user->address_id = $address->id;
        $user->save();
    }
}
