<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\RecipeTag
 *
 * @property int $recipe_id
 * @property int $tag_id
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeTag whereRecipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeTag whereTagId($value)
 * @property int $id
 * @method static \Database\Factories\RecipeTagFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|RecipeTag whereId($value)
 * @mixin \Eloquent
 */
class RecipeTag extends Pivot
{
    use HasFactory;

    public $timestamps = false;
}
