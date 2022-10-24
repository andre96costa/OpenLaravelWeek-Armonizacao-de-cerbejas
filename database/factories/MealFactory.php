<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meal>
 */
class MealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        fake()->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant(fake()));
        // $faker = \Faker\Factory::create();
        // $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        return [
            "name" => fake()->meatName(),
        ];
    }
}
