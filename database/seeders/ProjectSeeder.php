<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

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

        foreach(Project::all() as $project ){
            // $users = \App\Models\User::where('role', '2')->distinct('id')->pluck('id');
            $users = \App\Models\User::inRandomOrder()->take((rand(3,5)))->where('role', '2')->pluck('id');
            $project->users()->attach($users);
        }
    }
}
