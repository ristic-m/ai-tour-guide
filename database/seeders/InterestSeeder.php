<?php

namespace Database\Seeders;

use App\Models\Interest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Interest::create([
            'name' => 'sports'
        ]);
        Interest::create([
            'name' => 'outdoor activities'
        ]);
        Interest::create([
            'name' => 'arts & culture'
        ]);
        Interest::create([
            'name' => 'food & dining'
        ]);
        Interest::create([
            'name' => 'travel & adventure'
        ]);
        Interest::create([
            'name' => 'entertainment'
        ]);
        Interest::create([
            'name' => 'wellness & fitness'
        ]);
        Interest::create([
            'name' => 'reading & writing'
        ]);
        Interest::create([
            'name' => 'photography'
        ]);
        Interest::create([
            'name' => 'fashion & style'
        ]);
    }
}
