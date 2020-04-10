<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ana Maria',
            'cpf' => '356.410.350-33',
            'email' => 'ana.maria@email.com',
            'password' => Hash::make('anapassword'),
            'address_id' => '1'
        ]);

        User::create([
            'name' => 'Paula Netto',
            'cpf' => '528.445.290-97',
            'email' => 'paula.netto@email.com',
            'password' => Hash::make('nettopassword'),
            'address_id' => '2'
        ]);

        User::create([
            'name' => 'Marcos Bastos',
            'cpf' => '149.608.430-63',
            'email' => 'marcos.bastos@email.com',
            'password' => Hash::make('marcospassword'),
            'address_id' => '3'
        ]);

        User::create([
            'name' => 'Junior Neves',
            'cpf' => '698.255.700-67',
            'email' => 'junior.neves@email.com',
            'password' => Hash::make('juniorpassword'),
            'address_id' => '4'
        ]);
    }
}
