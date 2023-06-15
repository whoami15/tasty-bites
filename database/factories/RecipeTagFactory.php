<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecipeTag>
 */
class RecipeTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $recipeIds = \App\Models\Recipe::pluck('id')->toArray();
        $tagIds = \App\Models\Tag::pluck('id')->toArray();

        return [
            'recipe_id' => $this->faker->randomElement($recipeIds),
            'tag_id' => $this->faker->randomElement($tagIds),
        ];
    }
}
