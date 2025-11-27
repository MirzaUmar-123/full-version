<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carts = [
            ['user_id' => 1, 'product_id' => 3,  'quantity' => 1],
            ['user_id' => 1, 'product_id' => 7,  'quantity' => 2],
            ['user_id' => 1, 'product_id' => 12, 'quantity' => 1],

            ['user_id' => 2, 'product_id' => 5,  'quantity' => 3],
            ['user_id' => 2, 'product_id' => 9,  'quantity' => 1],
            ['user_id' => 2, 'product_id' => 14, 'quantity' => 2],

            ['user_id' => 3, 'product_id' => 2,  'quantity' => 1],
            ['user_id' => 3, 'product_id' => 8,  'quantity' => 2],
            ['user_id' => 3, 'product_id' => 11, 'quantity' => 4],

            ['user_id' => 4, 'product_id' => 1,  'quantity' => 1],
            ['user_id' => 4, 'product_id' => 6,  'quantity' => 3],
            ['user_id' => 4, 'product_id' => 19, 'quantity' => 2],

            ['user_id' => 5, 'product_id' => 4,  'quantity' => 1],
            ['user_id' => 5, 'product_id' => 10, 'quantity' => 2],
            ['user_id' => 5, 'product_id' => 15, 'quantity' => 1],
        ];

        foreach ($carts as $cart) {
            Cart::create($cart);
        }
    }
}

