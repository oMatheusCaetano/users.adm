<?php

use App\Phone;
use Illuminate\Database\Seeder;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
