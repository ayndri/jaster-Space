<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'idUser' => 1,
            'nama' => 'superadmin',
            'email' => 'superadmin@superadmin.com',
            'usrn' => 'superadmin',
            'jabatUser' => 'superadmin',
            'lastLogin' => now(),
            'password' => bcrypt('1234'),
            'waUser' => '1111',
            'tglUser' => NULL,
            'addrUser' => 'addr superadmin',
            'kotaUser' => 'kota superadmin',
            'fotoUser' => ''
        ]);

        $superadmin->assignRole('1');

        $jaster = User::create([
            'idUser' => 2,
            'nama' => 'jaster',
            'email' => 'jaster@superadmin.com',
            'usrn' => 'jaster',
            'jabatUser' => 'jaster',
            'lastLogin' => now(),
            'password' => bcrypt('1234'),
            'waUser' => '1111',
            'tglUser' => NULL,
            'addrUser' => 'addr jaster',
            'kotaUser' => 'kota jaster',
            'fotoUser' => '',
        ]);

        $jaster->assignRole('1');


        $admin = User::create([
            'idUser' => 3,
            'nama' => 'admin',
            'email' => 'admin@admin.com',
            'usrn' => 'admin',
            'jabatUser' => 'admin',
            'lastLogin' => now(),
            'password' => bcrypt('1234'),
            'waUser' => '1111',
            'tglUser' => NULL,
            'addrUser' => 'addr admin',
            'kotaUser' => 'kota admin',
            'fotoUser' => '',
        ]);

        $admin->assignRole('2');

        $user = User::create([
            'idUser' => 4,
            'nama' => 'team',
            'email' => 'team@team.com',
            'usrn' => 'team',
            'jabatUser' => 'team',
            'lastLogin' => now(),
            'password' => bcrypt('1234'),
            'waUser' => '1111',
            'tglUser' => NULL,
            'addrUser' => 'addr team',
            'kotaUser' => 'kota team',
            'fotoUser' => '',
        ]);

        $user->assignRole('3');

        $user = User::create([
            'idUser' => 5,
            'nama' => 'client',
            'email' => 'client@client.com',
            'usrn' => 'client',
            'jabatUser' => 'client',
            'lastLogin' => now(),
            'password' => bcrypt('1234'),
            'waUser' => '1111',
            'tglUser' => NULL,
            'addrUser' => 'addr client',
            'kotaUser' => 'kota client',
            'fotoUser' => '',
        ]);

        $user->assignRole('4');

        $user = User::create([
            'idUser' => 6,
            'nama' => 'magang',
            'email' => 'magang@magang.com',
            'usrn' => 'magang',
            'jabatUser' => 'magang',
            'lastLogin' => now(),
            'password' => bcrypt('1234'),
            'waUser' => '1111',
            'tglUser' => NULL,
            'addrUser' => 'addr magang',
            'kotaUser' => 'kota magang',
            'fotoUser' => '',
        ]);

        $user->assignRole('5');
    }
}
