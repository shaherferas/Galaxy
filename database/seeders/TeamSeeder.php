<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'A. G. Sam',
                'title' => 'Managing Partner',
                'image' => 'images/team-1.jpg',
            ],
            [
                'name' => 'Morgan Coleman',
                'title' => 'Managing Partner',
                'image' => 'images/team-2.jpg',
            ],
            [
                'name' => 'James Adams',
                'title' => 'UK Director / Partner',
                'image' => 'images/team-3.jpg',
            ],
            [
                'name' => 'Mahmoud A. Khatib',
                'title' => 'Marketing Director / Partner',
                'image' => 'images/team-4.jpg',
            ],
        ]);
    }
}
