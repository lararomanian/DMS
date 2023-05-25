<?php

use Illuminate\Database\Seeder;

class OrganizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizes')->insert([
            ['id' => 'HS', 'name' => 'Technopark LLC'],
            ['id' => 'TCHQ', 'name' => 'Federal Customs Service'],
            ['id' => 'BTC', 'name' => 'Minfin of Russia'],
            ['id' => 'BCT', 'name' => 'Ministry of Industry and Trade of Russia'],
            ['id' => 'VPTT', 'name' => 'LLC "Absolute"'],
            ['id' => 'BTNMT', 'name' => 'Sberbank of Russia'],
            ['id' => 'BQP', 'name' => 'Federal Tax Service'],
            ['id' => 'SHC', 'name' => 'OOO Sirius'],
        ]);
    }
}
