<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wishlist;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wishlists = [
            ['user_id' => 1, 'product_id' => 3],
            ['user_id' => 1, 'product_id' => 4],
            ['user_id' => 2, 'product_id' => 2],
            ['user_id' => 2, 'product_id' => 5],
            ['user_id' => 3, 'product_id' => 6],
            ['user_id' => 3, 'product_id' => 7],
            ['user_id' => 4, 'product_id' => 8],
            ['user_id' => 5, 'product_id' => 9],
            ['user_id' => 5, 'product_id' => 3],
            ['user_id' => 6, 'product_id' => 4],
        ];

        foreach ($wishlists as $item) {
            Wishlist::create($item);
        }
    }
}
