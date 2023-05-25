<?php

use Illuminate\Database\Seeder;
use App\Entities\User;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guard = config('auth.defaults.guard');

        DB::table(config('permission.table_names.permissions'))->insert([
            ['name' => 'Permission post', 'guard_name' => $guard],
            ['name' => 'Permission user', 'guard_name' => $guard],
            ['name' => 'Permission subdivision', 'guard_name' => $guard],
            ['name' => 'Permission', 'guard_name' => $guard],
            ['name' => 'Permission signed', 'guard_name' => $guard],
            ['name' => 'Permission issue place', 'guard_name' => $guard],
            ['name' => 'Document view permission', 'guard_name' => $guard],
            ['name' => 'Permission resolution', 'guard_name' => $guard],
            ['name' => 'Right', 'guard_name' => $guard],
            ['name' => 'Statistical', 'guard_name' => $guard],
            ['name' => 'Allowing incoming documents', 'guard_name' => $guard],
            ['name' => 'Permission Outgoing Documents', 'guard_name' => $guard],
            ['name' => 'Permission internal documents', 'guard_name' => $guard],
            ['name' => 'Book permission', 'guard_name' => $guard],
        ]);

        DB::table(config('permission.table_names.roles'))->insert([
            ['name' => 'Squad leader', 'guard_name' => $guard],
            ['name' => 'Chief', 'guard_name' => $guard],
            ['name' => 'Administrator', 'guard_name' => $guard],
            ['name' => 'Secretary', 'guard_name' => $guard],
        ]);

        Role::find(1)->syncPermissions([
            'Permission post',
            'Permission user',
            'Permission subdivision',
            'Permission signed',
            'Permission issue place',
            'Permission resolution',
            'Right',
            'Statistical',
        ]);

        Role::find(3)->syncPermissions([
            'Permission post',
            'Permission user',
            'Permission subdivision',
            'Permission signed',
            'Permission issue place',
            'Right',
            'Permission resolution',
            'Permission',
            'Statistical',
            'Allowing incoming documents',
            'Permission Outgoing Documents',
            'Permission internal documents',
            'Document view permission',
            'Book permission',
        ]);

        Role::find(4)->syncPermissions([
            'Statistical',
            'Allowing incoming documents',
            'Permission Outgoing Documents',
            'Permission internal documents',
            'Document view permission',
            'Book permission',
        ]);

        for ($i=0; $i < 10; $i++) { 
            User::where('department_id', 'PKTCN')->get()->random()->assignRole();
        }

        for ($i=0; $i < 10; $i++) { 
            User::where('department_id', 'PHCHC')->get()->random()->assignRole();
        }

        for ($i=0; $i < 50; $i++) { 
            User::whereNotIn('department_id', ['PKTCN', 'PHCHC'])
                ->get()
                ->random()
                ->assignRole(Role::all()->random()->id);
        }

        User::find('PKTCN-TP-1')->assignRole('Administrator');
        User::find('PKTCN-TP-100')->assignRole('Squad leader');
    }
}
