<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            ['id' => 'BGD', 'name' => 'Legal', 'tel' => '0123456600'],
            ['id' => 'PKHSX', 'name' => 'Planning and Economic Department', 'tel' => '0123456700'],
            ['id' => 'PTCLD', 'name' => 'HR', 'tel' => '0123456701'],
            ['id' => 'PTC', 'name' => 'Finance', 'tel' => '0123456702'],
            ['id' => 'PKTCN', 'name' => 'Repair and Maintenance Department', 'tel' => '0123456703'],
            ['id' => 'PVT', 'name' => 'Purchasing', 'tel' => '0123456704'],
            ['id' => 'PKCS', 'name' => 'Marketing', 'tel' => '0123456705'],
            ['id' => 'PHCHC', 'name' => 'HR Service', 'tel' => '0123456706'],
            ['id' => 'PCT', 'name' => 'Political', 'tel' => '0123456707'],
            ['id' => 'PTKCN', 'name' => 'QC', 'tel' => '0123456708'],
            ['id' => 'BATLD', 'name' => 'Automation Department', 'tel' => '0123456709'],
            ['id' => 'XDL', 'name' => 'Marketing', 'tel' => '0123456710'],
            ['id' => 'XVT', 'name' => 'Secretariat', 'tel' => '0123456711'],
            ['id' => 'XDTCD', 'name' => 'Customer Service', 'tel' => '0123456712'],
            ['id' => 'XCK', 'name' => 'Transport Logistics', 'tel' => '0123456713'],
            ['id' => 'XDD', 'name' => 'Sales', 'tel' => '0123456714'],
            ['id' => 'XVKKTDT', 'name' => 'IT department', 'tel' => '0123456715'],
            ['id' => 'XO', 'name' => 'Production department', 'tel' => '0123456716'],
        ]);
    }
}