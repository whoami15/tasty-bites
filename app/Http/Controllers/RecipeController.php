<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\RecipeResource;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class RecipeController extends Controller
{
    public function index(): Response
    {
        $recipes = Recipe::query()
            ->with(['category', 'course', 'user', 'photos', 'tags'])
            ->withCount('reviews')
            ->latest()
            ->get();

        return Inertia::render('Recipe/Index', [
            'recipes' => RecipeResource::collection($recipes),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Recipe/Create');
    }
}
