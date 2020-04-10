<?php

use App\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
