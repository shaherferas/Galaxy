<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'name' => 'Alex',
                'title' => 'Marketing Manager',
                'text' => 'An exceptional experience with Galaxy Elite Real Estate! The team was professional, responsive, and helped me find my dream home in no time. Highly recommended!',
                'image' => 'images/person_1.jpg',
            ],
            [
                'name' => 'Suzan',
                'title' => 'Sales Manager',
                'text' => 'Galaxy Elite Real Estate made the process of buying a property seamless and stress-free. Their expertise and dedication are unmatched!',
                'image' => 'images/person-6.jpg',
            ],
            [
                'name' => 'Taylor',
                'title' => 'Product Manager',
                'text' => 'Outstanding service from start to finish! The team at Galaxy Elite Real Estate went above and beyond to ensure I found the perfect property. Truly impressive!',
                'image' => 'images/person_3.jpg',
            ],
            [
                'name' => 'Morgan',
                'title' => 'Operations Manager',
                'text' => 'Highly professional and reliable! Galaxy Elite Real Estate Broker exceeded my expectations with their attention to detail and personalized approach. A pleasure to work with!',
                'image' => 'images/person_8.jpg',
            ],
            [
                'name' => 'Casey',
                'title' => 'Customer Service Manager',
                'text' => 'The best real estate experience I’ve ever had! Galaxy Elite Real Estate Broker made everything so easy and hassle-free. I couldn’t be happier with their service.',
                'image' => 'images/person_7.jpg',
            ],
        ]);
    }
}
