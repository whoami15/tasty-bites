<?php

namespace Database\Factories;

use App\Enums\RecipeStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryIds = \App\Models\Category::pluck('id')->toArray();
        $courseIds = \App\Models\Course::pluck('id')->toArray();
        $userIds = \App\Models\User::pluck('id')->toArray();

        return [
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'body' => fake()->paragraph(),
            'ingredients' => fake()->paragraph(),
            'instructions' => fake()->paragraph(),
            'preparation_time' => fake()->time('H:i:s'),
            'cooking_time' => fake()->time('H:i:s'),
            'servings' => fake()->numberBetween(1, 10),
            'status' => fake()->randomElement(RecipeStatus::cases()),
            'category_id' => $this->faker->randomElement($categoryIds),
            'course_id' => $this->faker->randomElement($courseIds),
            'user_id' => $this->faker->randomElement($userIds),
        ];
    }
}
