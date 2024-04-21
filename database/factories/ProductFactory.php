<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(2);

        return [
            //
            'name' => $name,
            'slug' => '_' . $name,
            'description' => $this->faker->sentence(5),
            'created_at' => $this->faker->dateTimeBetween('-15 days', '5 days'),
            'updated_at' => $this->faker->dateTimeBetween('-5 days', 'now'),

        ];
    }
}
