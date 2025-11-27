<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderItems = [
            ['order_id' => 1, 'product_id' => 2, 'price' => 50.00,  'quantity' => 2, 'total' => 100.00],
            ['order_id' => 1, 'product_id' => 3, 'price' => 20.00,  'quantity' => 1, 'total' => 20.00],
            ['order_id' => 2, 'product_id' => 1, 'price' => 80.00,  'quantity' => 1, 'total' => 80.00],
            ['order_id' => 2, 'product_id' => 4, 'price' => 15.00,  'quantity' => 3, 'total' => 45.00],
            ['order_id' => 3, 'product_id' => 5, 'price' => 200.00, 'quantity' => 1, 'total' => 200.00],
            ['order_id' => 4, 'product_id' => 6, 'price' => 60.00,  'quantity' => 2, 'total' => 120.00],
            ['order_id' => 5, 'product_id' => 7, 'price' => 150.00, 'quantity' => 1, 'total' => 150.00],
            ['order_id' => 6, 'product_id' => 2, 'price' => 50.00,  'quantity' => 4, 'total' => 200.00],
            ['order_id' => 7, 'product_id' => 8, 'price' => 30.00,  'quantity' => 2, 'total' => 60.00],
            ['order_id' => 8, 'product_id' => 3, 'price' => 20.00,  'quantity' => 1, 'total' => 20.00],
        ];

        foreach ($orderItems as $item) {
            OrderItem::create($item);
        }
    }
}
