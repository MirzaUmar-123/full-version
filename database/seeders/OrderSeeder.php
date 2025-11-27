<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'user_id' => 1,
                'order_number' => 'ORD-' . Str::upper(Str::random(8)),
                'status' => 'pending',
                'total_amount' => 120.99,
                'payment_method' => 'credit_card',
                'shipping_address' => '123 Main St, New York, NY, 10001',
                'billing_address' => '123 Main St, New York, NY, 10001',
            ],
            [
                'user_id' => 2,
                'order_number' => 'ORD-' . Str::upper(Str::random(8)),
                'status' => 'paid',
                'total_amount' => 89.50,
                'payment_method' => 'paypal',
                'shipping_address' => '456 Oak St, Los Angeles, CA, 90001',
                'billing_address' => '456 Oak St, Los Angeles, CA, 90001',
            ],
            [
                'user_id' => 3,
                'order_number' => 'ORD-' . Str::upper(Str::random(8)),
                'status' => 'shipped',
                'total_amount' => 209.99,
                'payment_method' => 'credit_card',
                'shipping_address' => '789 Pine St, Chicago, IL, 60601',
                'billing_address' => '789 Pine St, Chicago, IL, 60601',
            ],
            [
                'user_id' => 4,
                'order_number' => 'ORD-' . Str::upper(Str::random(8)),
                'status' => 'delivered',
                'total_amount' => 350.00,
                'payment_method' => 'paypal',
                'shipping_address' => '321 Maple Ave, Houston, TX, 77001',
                'billing_address' => '321 Maple Ave, Houston, TX, 77001',
            ],
            [
                'user_id' => 5,
                'order_number' => 'ORD-' . Str::upper(Str::random(8)),
                'status' => 'cancelled',
                'total_amount' => 75.40,
                'payment_method' => 'credit_card',
                'shipping_address' => '654 Cedar Rd, Phoenix, AZ, 85001',
                'billing_address' => '654 Cedar Rd, Phoenix, AZ, 85001',
            ],
            [
                'user_id' => 1,
                'order_number' => 'ORD-' . Str::upper(Str::random(8)),
                'status' => 'paid',
                'total_amount' => 450.75,
                'payment_method' => 'paypal',
                'shipping_address' => '123 Main St, New York, NY, 10001',
                'billing_address' => '123 Main St, New York, NY, 10001',
            ],
            [
                'user_id' => 2,
                'order_number' => 'ORD-' . Str::upper(Str::random(8)),
                'status' => 'pending',
                'total_amount' => 60.25,
                'payment_method' => 'credit_card',
                'shipping_address' => '456 Oak St, Los Angeles, CA, 90001',
                'billing_address' => '456 Oak St, Los Angeles, CA, 90001',
            ],
            [
                'user_id' => 3,
                'order_number' => 'ORD-' . Str::upper(Str::random(8)),
                'status' => 'shipped',
                'total_amount' => 499.99,
                'payment_method' => 'paypal',
                'shipping_address' => '789 Pine St, Chicago, IL, 60601',
                'billing_address' => '789 Pine St, Chicago, IL, 60601',
            ],
            [
                'user_id' => 4,
                'order_number' => 'ORD-' . Str::upper(Str::random(8)),
                'status' => 'delivered',
                'total_amount' => 180.00,
                'payment_method' => 'credit_card',
                'shipping_address' => '321 Maple Ave, Houston, TX, 77001',
                'billing_address' => '321 Maple Ave, Houston, TX, 77001',
            ],
            [
                'user_id' => 5,
                'order_number' => 'ORD-' . Str::upper(Str::random(8)),
                'status' => 'paid',
                'total_amount' => 220.45,
                'payment_method' => 'paypal',
                'shipping_address' => '654 Cedar Rd, Phoenix, AZ, 85001',
                'billing_address' => '654 Cedar Rd, Phoenix, AZ, 85001',
            ],
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
