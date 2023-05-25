<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['name' => 'Incoming documents'],
            ['name' => 'Outgoing documents'],
            ['name' => 'Internal documents'],
        ]);
    }
}
