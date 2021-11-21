<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $theName = $this->faker->name();
        $pro = "-Project";

        $totalSurveys = $this->faker->numberBetween($min = 300, $max = 1000);
        $surveysDone = $this->faker->numberBetween($min = 100, $max = $totalSurveys);

        
        return [
            'name' => $theName . $pro,
            'manager' => 'Jefe por defecto',
            'id_chief' => '2',
            'totalSurveys' => $totalSurveys,
            'surveysDone' => $surveysDone,
        ];
    }
}
