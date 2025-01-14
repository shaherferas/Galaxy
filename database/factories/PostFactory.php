<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = BlogPost::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence, // Generate a random title
            'description' => $this->faker->paragraphs(3, true), // Generate 3 paragraphs of content
            'image' => 'images/' . $this->faker->image('public/storage/images', 640, 480, null, false), // Generate an image
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Random date within the past year
            'updated_at' => now(),
        ];
    }
}
