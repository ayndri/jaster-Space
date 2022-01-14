<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'id' => '1',
            'name' => '1', //superadmin
        ]);

        Role::firstOrCreate([
            'id' => '2',
            'name' => '2',  //admin
        ]);

        Role::firstOrCreate([
            'id' => '3',
            'name' => '3',  //team
        ]);

        Role::firstOrCreate([
            'id' => '4',
            'name' => '4',  //client
        ]);

        Role::firstOrCreate([
            'id' => '5',
            'name' => '5',  //client
        ]);
    }
}
