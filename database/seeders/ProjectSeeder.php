<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('projects')->insert(
        //     [ 'name' => 'Proyecto1',
        //     'manager' => 'Jefe tal',
        //     'id_chief' => '2',
        //     ]);

        \App\Models\Project::factory(10)->create();
    }
}
