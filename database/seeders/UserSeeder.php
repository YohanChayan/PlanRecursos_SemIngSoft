<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();

        DB::table('users')->insert(
            [ 'name' => 'GerenteET',
            'email' => 'gerente@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('MasterGerente'), // password
            'role' => '0',
            'id_sup' => '0',
            'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
            [ 'name' => 'JefeET',
            'email' => 'jefe@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jefe'), // password
            'role' => '1',
            'id_sup' => '0',
            'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
            [ 'name' => 'EmpleadoET',
            'email' => 'empleado@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('empleado'), // password
            'role' => '2',
            'id_sup' => '2',
            'remember_token' => Str::random(10),
            ]);

    }
}
