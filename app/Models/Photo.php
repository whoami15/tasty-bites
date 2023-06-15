<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Photo
 *
 * @property int $id
 * @property int|null $recipe_id
 * @property string $path
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereRecipeId($value)
 * @property-read \App\Models\Recipe $recipe
 * @method static \Database\Factories\PhotoFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 */
class Photo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'recipe_id' => 'integer',
    ];

    public function recipe(): BelongsTo
    {
        return $this->belongsTo(Recipe::class);
    }
}
