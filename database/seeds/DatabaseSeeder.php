<?php

use App\Phone;
use App\Address;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'street' => 'Rua 21 de Abril',
            'city' => 'São Paulo',
            'state' => 'São Paulo',
            'number' => '21',
            'neighborhood' => 'Brás',
            'zip' => '03047-000',
            'complement' => 'Qd: 3 Lt: 124'
        ]);

        Address::create([
            'street' => 'Rua 18 de Abril',
            'city' => 'São Paulo',
            'state' => 'São Paulo',
            'number' => '357',
            'neighborhood' => 'Cidade Antônio Estevão de Carvalho',
            'zip' => '08226-021',
            'complement' => 'Qd: 4 Lt: 10'
        ]);

        Address::create([
            'street' => 'Rua dos Amores',
            'city' => 'Goiânia',
            'state' => 'Goiás',
            'number' => '10',
            'neighborhood' => 'Campinas',
            'zip' => '74123-152',
            'complement' => 'Qd: 30 Lt: 14'
        ]);

        Address::create([
            'street' => 'Rua Dr. Durval',
            'city' => 'Rio de Janeiro',
            'state' => 'Rio de Janeiro',
            'number' => '62',
            'neighborhood' => 'Barra da Tijuca',
            'zip' => '24152-139',
            'complement' => ''
        ]);

        User::create([
            'name' => 'Thiago Netto',
            'cpf' => '453.849.670-72',
            'birthDate' => '1998-04-07',
            'email' => 'thiago.netto@email.com',
            'password' => Hash::make('123456789'),
            'address_id' => '1'
        ]);

        User::create([
            'name' => 'Paula Netto',
            'cpf' => 'São Paulo',
            'birthDate' => '2000-06-16',
            'email' => 'paula.netto@email.com',
            'password' => Hash::make('123456789'),
            'address_id' => '1'
        ]);

        User::create([
            'name' => 'Marcos Bastos',
            'cpf' => '149.608.430-63',
            'birthDate' => '1995-01-30',
            'email' => 'marcos.bastos@email.com',
            'password' => Hash::make('123456789'),
            'address_id' => '3'
        ]);

        User::create([
            'name' => 'Junior Neves',
            'cpf' => '698.255.700-67',
            'birthDate' => '1990-12-12',
            'email' => 'junior.neves@email.com',
            'password' => Hash::make('123456789'),
            'address_id' => '4'
        ]);

        Phone::create([
            'number' => '(11) 92222-3333',
            'user_id' => '2'
        ]);

        Phone::create([
            'number' => '(62) 93333-2222',
            'user_id' => '2'
        ]);

        Phone::create([
            'number' => '(62) 91111-1234',
            'user_id' => '3'
        ]);

        Phone::create([
            'number' => '(62) 93214-5264',
            'user_id' => '4'
        ]);

        Phone::create([
            'number' => '(62) 91234-2532',
            'user_id' => '4'
        ]);

        Phone::create([
            'number' => '(62) 98888-2222',
            'user_id' => '4'
        ]);
    }
}
