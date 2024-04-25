<?php

namespace Database\Seeders;

use App\Models\Dietary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DietarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dietary::create([
            'type' => 'vegan'
        ]);

        Dietary::create([
            'type' => 'vegetarian'
        ]);

        Dietary::create([
            'type' => 'carnivore'
        ]);

        Dietary::create([
            'type' => 'gluten-free'
        ]);

        Dietary::create([
            'type' => 'dairy-free'
        ]);
    }
}
