<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['food', 'sport', 'life', 'Technology', 'earth', 'international'];
        $covers = ['assets/img/food.jpg', 'assets/img/sport.jpeg', 'assets/img/life.jpeg', 'assets/img/tech.jpg', 'assets/img/earth.jpg', 'assets/img/international.jpg'];
        for ($i=0 ; $i<count($categories); $i++)
        {
            Category::create([
                'title' => $categories[$i],
                'cover' => $covers[$i]
            ]);
        }
    }
}
