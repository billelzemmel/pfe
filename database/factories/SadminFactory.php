<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sadmin>
 */
class SadminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=> $this->faker->firstName,
            'prenom'=>$this->faker->lastName,
            'login'=> $this->faker->userName,
            'password'=> $this->faker->password,
            'email'=> $this->faker->email,

         ];
    }
}
