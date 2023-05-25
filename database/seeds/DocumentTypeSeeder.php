<?php

use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_types')->insert([
            ['id' => 'BC', 'name' => 'Report'],
            ['id' => 'CV', 'name' => 'Tale'],
            ['id' => 'HD', 'name' => 'Instruction'],
            ['id' => 'KH', 'name' => 'Reference'],
            ['id' => 'NQ', 'name' => 'Position'],
            ['id' => 'ND', 'name' => 'Application'],
            ['id' => 'QD', 'name' => 'Contract'],
        ]);
    }
}
