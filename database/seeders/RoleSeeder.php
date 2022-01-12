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
            'name' => '1', //superadmin
        ]);

        Role::firstOrCreate([
            'name' => '2',  //admin
        ]);

        Role::firstOrCreate([
            'name' => '3',  //team
        ]);

        Role::firstOrCreate([
            'name' => '4',  //client
        ]);

        Role::firstOrCreate([
            'name' => '5',  //client
        ]);
    }
}
