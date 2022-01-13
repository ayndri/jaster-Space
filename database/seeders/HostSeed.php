<?php

namespace Database\Seeders;

use App\Models\Host;
use Illuminate\Database\Seeder;

class HostSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Host::create([
            'idHost' => 1,
            'domHost' => 'sukafotoproduk.com',
            'userHost' => 'sukafoto',
            'passHost' => '1f5JvzXI'
        ]);
        Host::create([
            'idHost' => 2,
            'domHost' => 'website1juta.com',
            'userHost' => 'u7143870',
            'passHost' => '2RgMtZJa'
        ]);
        Host::create([
            'idHost' => 3,
            'domHost' => 'jasawebsidoarjo.com',
            'userHost' => 'u6728999',
            'passHost' => 'uHfyQ88r2m'
        ]);
    }
}
