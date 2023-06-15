<?php

namespace App\Http\Resources;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\CourseResource;
use App\Http\Resources\PhotoResource;
use App\Http\Resources\TagResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecipeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'ingredients' => $this->ingredients,
            'instructions' => $this->instructions,
            'preparation_time' => $this->preparation_time,
            'cooking_time' => $this->cooking_time,
            'servings' => $this->servings,
            'views' => $this->views,
            'status' => $this->status,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'photos' => PhotoResource::collection($this->whenLoaded('photos')),
            'tags' => TagResource::collection($this->whenLoaded('tags')),
            'category' => new CategoryResource($this->whenLoaded('category')),
            'course' => new CourseResource($this->whenLoaded('course')),
            'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}
