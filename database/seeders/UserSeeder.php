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
            'id_sup' => '1',
            'remember_token' => Str::random(10),
            ]);

            //empleados

        DB::table('users')->insert(
            [ 'name' => 'EmpleadoET',
            'email' => 'empleado@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('empleado'), // password
            'role' => '2',
            'id_sup' => '2',
            'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
            [ 'name' => 'Empleado2ET',
            'email' => 'empleado2@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('empleado2'), // password
            'role' => '2',
            'id_sup' => '2',
            'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
            [ 'name' => 'Empleado3ET',
            'email' => 'empleado3@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('empleado3'), // password
            'role' => '2',
            'id_sup' => '2',
            'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
            [ 'name' => 'Empleado4ET',
            'email' => 'empleado4@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('empleado4'), // password
            'role' => '2',
            'id_sup' => '2',
            'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
                [ 'name' => 'Empleado5ET',
                'email' => 'empleado5@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('empleado5'), // password
                'role' => '2',
                'id_sup' => '2',
                'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
                [ 'name' => 'Empleado6ET',
                'email' => 'empleado6@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('empleado6'), // password
                'role' => '2',
                'id_sup' => '2',
                'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
                [ 'name' => 'Empleado7ET',
                'email' => 'empleado7@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('empleado7'), // password
                'role' => '2',
                'id_sup' => '2',
                'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
                [ 'name' => 'Empleado8ET',
                'email' => 'empleado8@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('empleado8'), // password
                'role' => '2',
                'id_sup' => '2',
                'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
                [ 'name' => 'Empleado9ET',
                'email' => 'empleado9@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('empleado9'), // password
                'role' => '2',
                'id_sup' => '2',
                'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
                [ 'name' => 'Empleado10ET',
                'email' => 'empleado10@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('empleado10'), // password
                'role' => '2',
                'id_sup' => '2',
                'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
            [ 'name' => 'Empleado11ET',
            'email' => 'empleado11@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('empleado11'), // password
            'role' => '2',
            'id_sup' => '2',
            'remember_token' => Str::random(10),
            ]);

        DB::table('users')->insert(
            [ 'name' => 'Empleado12ET',
            'email' => 'empleado12@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('empleado12'), // password
            'role' => '2',
            'id_sup' => '2',
            'remember_token' => Str::random(10),
            ]);


        DB::table('users')->insert(
            [ 'name' => 'Empleado13ET',
            'email' => 'empleado13@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('empleado13'), // password
            'role' => '2',
            'id_sup' => '2',
            'remember_token' => Str::random(10),
            ]);

    }
}
