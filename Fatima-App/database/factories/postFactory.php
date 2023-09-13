<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
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
            'title'=>  $this->faker->name(),
            'description'=>  $this->faker->sentence(5),
            'image'=>  $this->faker->imageUrl(600, 400, 'people')
        ];
    }
}
