<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Apple',
                'slug' => 'apple',
                'description' => 'Apple Inc. is an American multinational technology company known for the iPhone, Mac, and Apple Watch.',
                'logo_path' => 'brands/apple.png',
                'is_active' => true,
            ],
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'description' => 'Samsung is a South Korean multinational electronics company known for its smartphones and home appliances.',
                'logo_path' => 'brands/samsung.png',
                'is_active' => true,
            ],
            [
                'name' => 'Sony',
                'slug' => 'sony',
                'description' => 'Sony is a Japanese multinational corporation known for PlayStation, cameras, and electronics.',
                'logo_path' => 'brands/sony.png',
                'is_active' => true,
            ],
            [
                'name' => 'Microsoft',
                'slug' => 'microsoft',
                'description' => 'Microsoft Corporation is a technology company known for Windows, Xbox, and cloud services.',
                'logo_path' => 'brands/microsoft.png',
                'is_active' => true,
            ],
            [
                'name' => 'Dell',
                'slug' => 'dell',
                'description' => 'Dell Technologies is known for computers, laptops, and enterprise technology solutions.',
                'logo_path' => 'brands/dell.png',
                'is_active' => true,
            ],
            [
                'name' => 'HP',
                'slug' => 'hp',
                'description' => 'Hewlett-Packard (HP) is a global company known for computers, printers, and electronics.',
                'logo_path' => 'brands/hp.png',
                'is_active' => true,
            ],
            [
                'name' => 'Lenovo',
                'slug' => 'lenovo',
                'description' => 'Lenovo is a global leader in PCs, laptops, tablets, and smart devices.',
                'logo_path' => 'brands/lenovo.png',
                'is_active' => true,
            ],
            [
                'name' => 'Asus',
                'slug' => 'asus',
                'description' => 'Asus is a Taiwanese multinational company specializing in computers, laptops, and gaming equipment.',
                'logo_path' => 'brands/asus.png',
                'is_active' => true,
            ],
            [
                'name' => 'Acer',
                'slug' => 'acer',
                'description' => 'Acer is a multinational hardware and electronics corporation known for laptops and monitors.',
                'logo_path' => 'brands/acer.png',
                'is_active' => true,
            ],
            [
                'name' => 'Xiaomi',
                'slug' => 'xiaomi',
                'description' => 'Xiaomi is a Chinese electronics company known for smartphones, smart home devices, and gadgets.',
                'logo_path' => 'brands/xiaomi.png',
                'is_active' => true,
            ],
            [
                'name' => 'Huawei',
                'slug' => 'huawei',
                'description' => 'Huawei is a Chinese multinational technology company known for smartphones and networking equipment.',
                'logo_path' => 'brands/huawei.png',
                'is_active' => true,
            ],
            [
                'name' => 'Nokia',
                'slug' => 'nokia',
                'description' => 'Nokia is a Finnish multinational telecommunications and electronics company.',
                'logo_path' => 'brands/nokia.png',
                'is_active' => true,
            ],
            [
                'name' => 'LG',
                'slug' => 'lg',
                'description' => 'LG is a South Korean multinational company known for electronics and home appliances.',
                'logo_path' => 'brands/lg.png',
                'is_active' => true,
            ],
            [
                'name' => 'Canon',
                'slug' => 'canon',
                'description' => 'Canon is a Japanese multinational company specializing in cameras, imaging, and optical products.',
                'logo_path' => 'brands/canon.png',
                'is_active' => true,
            ],
            [
                'name' => 'Panasonic',
                'slug' => 'panasonic',
                'description' => 'Panasonic is a Japanese multinational electronics corporation known for home appliances and cameras.',
                'logo_path' => 'brands/panasonic.png',
                'is_active' => true,
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}

