<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'game_id' => '1',
            'name' => 'Joki Rank S-13',
            'img' => 'https://i.ibb.co/9WhpPyP/2.png'
        ]);
        Product::create([
            'game_id' => '2',
            'name' => 'Joki Competitive',
            'img' => 'https://i.ibb.co/wB812Wj/1.png'
        ]);
        Product::create([
            'game_id' => '4',
            'name' => 'Joki Rank',
            'img' => 'https://i.ibb.co/CbZtPyk/3.png'
        ]);
        Product::create([
            'game_id' => '3',
            'name' => 'Joki Classic Ranked',
            'img' => 'https://i.ibb.co/dBWQ8km/4.png'
        ]);
    }
}
