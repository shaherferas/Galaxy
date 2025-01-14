<?php
// database/factories/PropertyFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Country;
use App\Models\PropertyType;

class PropertyFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true), // Fake property name
            'property_type_id' => PropertyType::inRandomOrder()->first()->id, // Random type
            'type' => $this->faker->randomElement(['buy', 'sell','rent']), // Random type
            'price' => $this->faker->numberBetween(50000, 5000000), // Random price between 50k and 5M
            'country_id' => Country::inRandomOrder()->first()->id, // Random country
            'estate_selection' => $this->faker->randomElement(['Residential', 'Holiday', 'New Development', 'Commercial', 'Land']), // Random status
            'image' => "test", // Random status
        ];
    }
}

