<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\RecipeResource;
use App\Models\Recipe;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $recipes = Recipe::query()
            ->with(['category', 'course', 'user', 'photos', 'tags'])
            ->withCount('reviews')
            ->latest()
            ->get();

        return Inertia::render('Home/Index', [
            'recipes' => RecipeResource::collection($recipes),
        ]);
    }
}
