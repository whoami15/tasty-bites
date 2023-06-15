<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->count(9)->create();

        $this->call([
            CategorySeeder::class,
            CourseSeeder::class,
            TagSeeder::class,
            RecipeSeeder::class,
            PhotoSeeder::class,
            FavoriteRecipeSeeder::class,
            RecipeTagSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}
