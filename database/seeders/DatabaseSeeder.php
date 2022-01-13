<?php

namespace Database\Seeders;

use App\Models\Host;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            HostSeed::class,
            RoleSeeder::class,
            UserSeeder::class
        ]);
        \App\Models\Akses::factory(100)->create();
    }
}
