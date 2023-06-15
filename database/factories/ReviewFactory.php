<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $recipeIds = \App\Models\Recipe::pluck('id')->toArray();
        $userIds = \App\Models\User::pluck('id')->toArray();

        return [
            'body' => $this->faker->paragraph,
            'rating' => $this->faker->numberBetween(1, 5),
            'recipe_id' => $this->faker->randomElement($recipeIds),
            'user_id' => $this->faker->randomElement($userIds),
        ];
    }
}
