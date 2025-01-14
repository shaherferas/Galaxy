<?php

// database/seeders/PropertySeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    public function run()
    {
        Property::factory()->count(50)->create(); // Generate 50 fake properties
    }
}
