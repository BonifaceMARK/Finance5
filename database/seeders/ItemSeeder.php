<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'Laptop',
                'description' => 'Powerful laptop for all your needs',
                'price' => 999,
                'image_url' => 'assets/img/laptop.jpg',
                'seller' => 'Electronics Emporium',
            ],
            [
                'title' => 'Smartphone',
                'description' => 'Latest smartphone with advanced features',
                'price' => 699,
                'image_url' => 'assets/img/smartphone.jpg',
                'seller' => 'Gadget World',
            ],
            [
                'title' => 'Camera',
                'description' => 'Professional camera for stunning photos',
                'price' => 1299,
                'image_url' => 'assets/img/camera.jpg',
                'seller' => 'Photography Pros',
            ],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
