<?php

declare(strict_types=1);

use App\Enums\RecipeStatus;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->text('ingredients');
            $table->text('instructions');
            $table->time('preparation_time');
            $table->time('cooking_time');
            $table->unsignedInteger('servings');
            $table->unsignedBigInteger('views')->default(0);
            $table->string('status')->default(RecipeStatus::PENDING->value);
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Course::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
