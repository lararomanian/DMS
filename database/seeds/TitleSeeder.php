<?php

use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            ['id' => 'GD', 'name' => 'Director'],
            ['id' => 'PGD', 'name' => 'Deputy Director'],
            ['id' => 'TP', 'name' => 'Manager'],
            ['id' => 'PP', 'name' => 'Deputy Manager'],
            ['id' => 'CV', 'name' => 'Leading Specialist'],
        ]);
    }
}
