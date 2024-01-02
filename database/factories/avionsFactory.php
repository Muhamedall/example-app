<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Avions>
 */
class avionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [ 
             //faker wahd libreray  li kat3ti les nome t9riban 7a9i9in
        'libelle' => $this->faker->name(),
        'capacite' => $this->faker->numberBetween(),
        
        
        ];
    }
}
