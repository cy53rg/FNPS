<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\staff>
 */
class staffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'fullName'=> $this->faker->name(),
            'office'=> $this->faker->randomElement(['Principal', 'Chapeling', 'Burser', 'Teacher', 'Porter', 'Vice Principal']),
            'description'=> $this->faker->sentence(2),
            'image'=> $this->faker->imageUrl(600, 400, 'person'),
            'email'=> $this->faker->unique()->safeEmail(),
        ];
    }
}
