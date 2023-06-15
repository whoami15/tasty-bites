<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\FavoriteRecipe
 *
 * @property int $user_id
 * @property int $recipe_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|FavoriteRecipe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FavoriteRecipe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FavoriteRecipe query()
 * @method static \Illuminate\Database\Eloquent\Builder|FavoriteRecipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavoriteRecipe whereRecipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavoriteRecipe whereUserId($value)
 * @property int $id
 * @method static \Database\Factories\FavoriteRecipeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FavoriteRecipe whereId($value)
 * @mixin \Eloquent
 */
class FavoriteRecipe extends Pivot
{
    use HasFactory;

    const UPDATED_AT = null;
}
