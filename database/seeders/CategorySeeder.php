<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Smartphones',
                'slug' => 'smartphones',
                'description' => 'Mobile phones with advanced features and smart capabilities.',
                'status' => 1,
                'image' => 'categories/smartphones.jpg',
            ],
            [
                'name' => 'Laptops',
                'slug' => 'laptops',
                'description' => 'Portable computers suitable for work, study, and gaming.',
                'status' => 1,
                'image' => 'categories/laptops.jpg',
            ],
            [
                'name' => 'Tablets',
                'slug' => 'tablets',
                'description' => 'Touchscreen portable devices for media, browsing, and productivity.',
                'status' => 1,
                'image' => 'categories/tablets.jpg',
            ],
            [
                'name' => 'Headphones',
                'slug' => 'headphones',
                'description' => 'Audio devices for music, gaming, and communication.',
                'status' => 1,
                'image' => 'categories/headphones.jpg',
            ],
            [
                'name' => 'Televisions',
                'slug' => 'televisions',
                'description' => 'Smart and LED TVs for home entertainment.',
                'status' => 1,
                'image' => 'categories/televisions.jpg',
            ],
            [
                'name' => 'Cameras',
                'slug' => 'cameras',
                'description' => 'Digital cameras, DSLRs, and mirrorless cameras.',
                'status' => 1,
                'image' => 'categories/cameras.jpg',
            ],
            [
                'name' => 'Gaming Consoles',
                'slug' => 'gaming-consoles',
                'description' => 'Home and portable gaming systems.',
                'status' => 1,
                'image' => 'categories/gaming-consoles.jpg',
            ],
            [
                'name' => 'Smartwatches',
                'slug' => 'smartwatches',
                'description' => 'Wearable devices for fitness and smart functions.',
                'status' => 1,
                'image' => 'categories/smartwatches.jpg',
            ],
            [
                'name' => 'Home Appliances',
                'slug' => 'home-appliances',
                'description' => 'Refrigerators, washing machines, and other home devices.',
                'status' => 1,
                'image' => 'categories/home-appliances.jpg',
            ],
            [
                'name' => 'Monitors',
                'slug' => 'monitors',
                'description' => 'Computer screens for work and gaming.',
                'status' => 1,
                'image' => 'categories/monitors.jpg',
            ],
            [
                'name' => 'Networking Devices',
                'slug' => 'networking-devices',
                'description' => 'Routers, modems, and network products.',
                'status' => 1,
                'image' => 'categories/networking-devices.jpg',
            ],
            [
                'name' => 'Printers',
                'slug' => 'printers',
                'description' => 'Inkjet, laser, and all-in-one printers.',
                'status' => 1,
                'image' => 'categories/printers.jpg',
            ],
            [
                'name' => 'PC Components',
                'slug' => 'pc-components',
                'description' => 'Graphics cards, processors, and other computer parts.',
                'status' => 1,
                'image' => 'categories/pc-components.jpg',
            ],
            [
                'name' => 'Audio Systems',
                'slug' => 'audio-systems',
                'description' => 'Speakers, soundbars, and home audio equipment.',
                'status' => 1,
                'image' => 'categories/audio-systems.jpg',
            ],
            [
                'name' => 'Accessories',
                'slug' => 'accessories',
                'description' => 'Chargers, cables, cases, and tech accessories.',
                'status' => 1,
                'image' => 'categories/accessories.jpg',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
