<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Apple iPhone 14 Pro',
                'description' => 'Apple iPhone 14 Pro with A16 Bionic chip and 48MP main camera.',
                'price' => 999.00,
                'discount_price' => 949.00,
                'stock' => 50,
                'image' => 'products/iphone14pro.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Samsung Galaxy S23 Ultra',
                'description' => 'Samsung Galaxy S23 Ultra with 200MP camera and Snapdragon processor.',
                'price' => 1199.00,
                'discount_price' => 1149.00,
                'stock' => 40,
                'image' => 'products/galaxy-s23-ultra.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Sony WH-1000XM5 Headphones',
                'description' => 'Industry-leading noise-canceling wireless headphones.',
                'price' => 399.99,
                'discount_price' => 349.99,
                'stock' => 75,
                'image' => 'products/sony-xm5.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Apple MacBook Air M2',
                'description' => 'Apple MacBook Air powered by the M2 chip with a stunning Retina display.',
                'price' => 1199.00,
                'discount_price' => 1099.00,
                'stock' => 30,
                'image' => 'products/macbook-air-m2.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Dell XPS 13 Laptop',
                'description' => 'Dell XPS 13 with InfinityEdge display and Intel 12th Gen processor.',
                'price' => 999.99,
                'discount_price' => 949.99,
                'stock' => 25,
                'image' => 'products/dell-xps-13.jpg',
                'status' => 1,
            ],
            [
                'name' => 'PlayStation 5 Console',
                'description' => 'Sony PlayStation 5 gaming console with ultra-fast SSD.',
                'price' => 499.99,
                'discount_price' => 479.99,
                'stock' => 60,
                'image' => 'products/ps5.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Xbox Series X',
                'description' => 'Microsoft Xbox Series X with 4K gaming and 1TB SSD storage.',
                'price' => 499.99,
                'discount_price' => 469.99,
                'stock' => 55,
                'image' => 'products/xbox-series-x.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Nintendo Switch OLED',
                'description' => 'Nintendo Switch OLED model with vibrant 7-inch display.',
                'price' => 349.99,
                'discount_price' => 329.99,
                'stock' => 80,
                'image' => 'products/switch-oled.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Logitech MX Master 3 Mouse',
                'description' => 'Advanced ergonomic wireless mouse for productivity.',
                'price' => 99.99,
                'discount_price' => 89.99,
                'stock' => 120,
                'image' => 'products/mx-master-3.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Apple Watch Series 8',
                'description' => 'Apple Watch Series 8 with advanced health tracking features.',
                'price' => 399.00,
                'discount_price' => 379.00,
                'stock' => 70,
                'image' => 'products/apple-watch-s8.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Google Pixel 7 Pro',
                'description' => 'Google Pixel 7 Pro with Tensor G2 chip and AI-enhanced camera.',
                'price' => 899.00,
                'discount_price' => 859.00,
                'stock' => 40,
                'image' => 'products/pixel7pro.jpg',
                'status' => 1,
            ],
            [
                'name' => 'JBL Flip 6 Bluetooth Speaker',
                'description' => 'Portable waterproof Bluetooth speaker with powerful sound.',
                'price' => 129.99,
                'discount_price' => 119.99,
                'stock' => 150,
                'image' => 'products/jbl-flip-6.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Canon EOS R6 Camera',
                'description' => 'Canon EOS R6 mirrorless camera for photographers and videographers.',
                'price' => 2499.00,
                'discount_price' => 2399.00,
                'stock' => 20,
                'image' => 'products/canon-r6.jpg',
                'status' => 1,
            ],
            [
                'name' => 'GoPro HERO11 Black',
                'description' => 'GoPro HERO11 Black rugged 5.3K action camera.',
                'price' => 499.99,
                'discount_price' => 449.99,
                'stock' => 45,
                'image' => 'products/gopro-hero11.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Razer BlackWidow V3 Keyboard',
                'description' => 'Mechanical gaming keyboard with RGB lighting.',
                'price' => 139.99,
                'discount_price' => 129.99,
                'stock' => 85,
                'image' => 'products/razer-blackwidow-v3.jpg',
                'status' => 1,
            ],
            [
                'name' => 'LG 55-inch OLED TV',
                'description' => 'LG OLED TV with 4K HDR support and stunning picture quality.',
                'price' => 1299.00,
                'discount_price' => 1199.00,
                'stock' => 18,
                'image' => 'products/lg-oled55.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Amazon Kindle Paperwhite',
                'description' => 'Waterproof Kindle Paperwhite with adjustable warm light.',
                'price' => 149.99,
                'discount_price' => 139.99,
                'stock' => 110,
                'image' => 'products/kindle-paperwhite.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Anker PowerCore 20000 Power Bank',
                'description' => 'High-capacity portable charger with fast charging technology.',
                'price' => 49.99,
                'discount_price' => 44.99,
                'stock' => 200,
                'image' => 'products/anker-powercore.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Fitbit Charge 5',
                'description' => 'Advanced fitness tracker with built-in GPS and health metrics.',
                'price' => 179.99,
                'discount_price' => 159.99,
                'stock' => 90,
                'image' => 'products/fitbit-charge-5.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Dyson V11 Vacuum Cleaner',
                'description' => 'Dyson V11 cordless vacuum with powerful suction and smart cleaning modes.',
                'price' => 599.99,
                'discount_price' => 549.99,
                'stock' => 22,
                'image' => 'products/dyson-v11.jpg',
                'status' => 1,
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                ...$product,
                'slug' => Str::slug($product['name']),
            ]);
        }
    }
}
