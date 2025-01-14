<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Generate 20 fake posts
        BlogPost::factory()->count(20)->create();
    }
}
