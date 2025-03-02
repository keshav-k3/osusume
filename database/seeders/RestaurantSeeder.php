<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\FoodCategory;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get category IDs for easier reference
        $ramenId = FoodCategory::where('name', 'Ramen')->first()->id;
        $sushiId = FoodCategory::where('name', 'Sushi')->first()->id;
        $cafeId = FoodCategory::where('name', 'Café')->first()->id;
        $izakayaId = FoodCategory::where('name', 'Izakaya')->first()->id;
        
        $restaurants = [
            [
                'name' => 'Ichiran Ramen',
                'description' => 'Famous tonkotsu ramen chain known for individual booths.',
                'address' => '1-22-7 Jinnan, Shibuya City, Tokyo',
                'latitude' => 35.6614,
                'longitude' => 139.7007,
                'google_place_id' => 'ChIJu2_3HqGMGGARo_qAG-Yj4c8',
                'instagram_handle' => 'ichiran_ramen',
                'image_url' => 'https://example.com/ichiran.jpg',
                'categories' => [$ramenId]
            ],
            [
                'name' => 'Sukiyabashi Jiro',
                'description' => 'World-renowned sushi restaurant with 3 Michelin stars.',
                'address' => '4-2-15 Ginza, Chuo City, Tokyo',
                'latitude' => 35.6717,
                'longitude' => 139.7649,
                'google_place_id' => 'ChIJ-ZZq3mGLGGARGD7bcj-oSjI',
                'instagram_handle' => 'sukiyabashi_jiro',
                'image_url' => 'https://example.com/jiro.jpg',
                'categories' => [$sushiId]
            ],
            [
                'name' => 'Blue Bottle Coffee',
                'description' => 'Specialty coffee roaster with minimalist aesthetic.',
                'address' => '3-13-14 Kiyosumi, Koto City, Tokyo',
                'latitude' => 35.6829,
                'longitude' => 139.7989,
                'google_place_id' => 'ChIJL0gV9KKJGGAR7MA1XLBjUvs',
                'instagram_handle' => 'bluebottlejapan',
                'image_url' => 'https://example.com/bluebottle.jpg',
                'categories' => [$cafeId]
            ],
            [
                'name' => 'Gonpachi Nishi-Azabu',
                'description' => 'Famous izakaya known as the "Kill Bill restaurant".',
                'address' => '1-13-11 Nishi-Azabu, Minato City, Tokyo',
                'latitude' => 35.6598,
                'longitude' => 139.7273,
                'google_place_id' => 'ChIJH_DWbZqLGGARZYN3HyJ8PWs',
                'instagram_handle' => 'gonpachi_official',
                'image_url' => 'https://example.com/gonpachi.jpg',
                'categories' => [$izakayaId]
            ]
        ];

        // Create restaurants and attach categories
        foreach ($restaurants as $restaurantData) {
            $categories = $restaurantData['categories'];
            unset($restaurantData['categories']);
            
            $restaurant = Restaurant::create($restaurantData);
            $restaurant->categories()->attach($categories);
        }
    }
}
