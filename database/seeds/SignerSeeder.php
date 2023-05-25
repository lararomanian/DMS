<?php

use Illuminate\Database\Seeder;

class SignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('signers')->insert([
            ['name' => 'Golovchenko Yury Alekseevich', 'description' => 'Chief Financial Director'],
            ['name' => 'Sergeev Nikolai Mikhailovich', 'description' => 'General Director'],
            ['name' => 'Sergeev Nikolai Mikhailovich', 'description' => 'Head of the company'],
            ['name' => 'Surikova Anastasia Nikolaevna', 'description' => null],
            ['name' => 'Maisheva Polina Rodionovna', 'description' => 'Deputy Director'],
        ]);
    }
}
