<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FavoriteRecipe>
 */
class FavoriteRecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = \App\Models\User::pluck('id')->toArray();
        $recipeIds = \App\Models\Recipe::pluck('id')->toArray();

        return [
            'user_id' => $this->faker->randomElement($userIds),
            'recipe_id' => $this->faker->randomElement($recipeIds),
        ];
    }
}
