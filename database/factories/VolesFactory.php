<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voles>
 */
class VolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
              
        'date_depart' => $this->faker->dateTime(),
        'date_arivie' => $this->faker->dateTime(),
       
        ];
    }
}
