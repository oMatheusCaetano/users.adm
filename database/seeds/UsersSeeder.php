<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Thiago Netto',
            'cpf' => '453.849.670-72',
            'bithDate' => '1998-04-07',
            'email' => 'thiago.netto@email.com',
            'password' => Hash::make('123456789'),
            'address_id' => '1'
        ]);

        User::create([
            'name' => 'Paula Netto',
            'cpf' => 'São Paulo',
            'bithDate' => '2000-06-16',
            'email' => 'paula.netto@email.com',
            'password' => Hash::make('123456789'),
            'address_id' => '1'
        ]);

        User::create([
            'name' => 'Marcos Bastos',
            'cpf' => '149.608.430-63',
            'bithDate' => '1995-01-30',
            'email' => 'marcos.bastos@email.com',
            'password' => Hash::make('123456789'),
            'address_id' => '3'
        ]);

        User::create([
            'name' => 'Junior Neves',
            'cpf' => '698.255.700-67',
            'bithDate' => '1990-12-12',
            'email' => 'junior.neves@email.com',
            'password' => Hash::make('123456789'),
            'address_id' => '4'
        ]);
    }
}
