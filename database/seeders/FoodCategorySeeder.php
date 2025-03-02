<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodCategory;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Ramen',
                'icon' => 'ramen-bowl',
                'description' => 'Japanese noodle soup dishes'
            ],
            [
                'name' => 'Sushi',
                'icon' => 'sushi',
                'description' => 'Japanese dish of prepared vinegared rice'
            ],
            [
                'name' => 'Café',
                'icon' => 'coffee',
                'description' => 'Coffee shops and casual dining'
            ],
            [
                'name' => 'Izakaya',
                'icon' => 'beer',
                'description' => 'Japanese pub offering a variety of small dishes'
            ],
            [
                'name' => 'Curry',
                'icon' => 'curry',
                'description' => 'Japanese-style curry dishes'
            ],
            [
                'name' => 'Dessert',
                'icon' => 'cake',
                'description' => 'Sweet treats and dessert shops'
            ],
            [
                'name' => 'Yakitori',
                'icon' => 'meat-on-stick',
                'description' => 'Grilled chicken skewers'
            ],
            [
                'name' => 'Udon',
                'icon' => 'noodles',
                'description' => 'Thick wheat flour noodle dishes'
            ],
        ];

        foreach ($categories as $category) {
            FoodCategory::create($category);
        }
    }
}
