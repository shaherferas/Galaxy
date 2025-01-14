<?php

// database/seeders/PropertyTypeSeeder.php
namespace Database\Seeders;

use App\Models\ParentPropertyType;
use Illuminate\Database\Seeder;
use App\Models\PropertyType;

class PropertyTypeSeeder extends Seeder
{
    public function run()
    {
        $propertyTypes = [
            'Residential' => ['Apartment', 'Villa', 'Townhouse', 'Penthouse', 'Duplex'],
            'Commercial' => ['Office Space', 'Retail Space', 'Warehouse', 'Industrial'],
            'Holiday' => ['Beachfront Property', 'Mountain Retreat', 'Urban Apartment', 'Farmhouse', 'Resort Villa'],
            'New Developments' => [],
        ];

        foreach ($propertyTypes as $category => $types) {
            $parent = ParentPropertyType::create([
                'name' => $category,
            ]);
            foreach ($types as $type) {
                PropertyType::create([
                    'name' => $type,
                    'parent_types_id' => $parent->id,
                ]);
            }




        }
    }
}
