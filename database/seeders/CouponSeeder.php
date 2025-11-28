<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coupon;
use Carbon\Carbon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coupons = [
            [
                'created_by' => 1,
                'code' => 'WELCOME10',
                'discount_amount' => 10.00,
                'description' => '10% off for new customers.',
                'expiry_date' => Carbon::now()->addMonths(3),
                'usage_limit' => 100,
                'min_order_amount' => 50.00,
                'is_active' => true,
            ],
            [
                'created_by' => 1,
                'code' => 'SUMMER15',
                'discount_amount' => 15.00,
                'description' => '15% discount on all summer items.',
                'expiry_date' => Carbon::now()->addMonths(2),
                'usage_limit' => 50,
                'min_order_amount' => 100.00,
                'is_active' => true,
            ],
            [
                'created_by' => 1,
                'code' => 'FREESHIP50',
                'discount_amount' => 0.00,
                'description' => 'Free shipping on orders above $50.',
                'expiry_date' => Carbon::now()->addMonths(6),
                'usage_limit' => 200,
                'min_order_amount' => 50.00,
                'is_active' => true,
            ],
            [
                'created_by' => 1,
                'code' => 'BLACKFRIDAY20',
                'discount_amount' => 20.00,
                'description' => '20% off storewide during Black Friday.',
                'expiry_date' => Carbon::now()->addMonths(1),
                'usage_limit' => 500,
                'min_order_amount' => 0,
                'is_active' => true,
            ],
            [
                'created_by' => 1,
                'code' => 'WINTER5',
                'discount_amount' => 5.00,
                'description' => 'Flat $5 off on winter items.',
                'expiry_date' => Carbon::now()->addMonths(4),
                'usage_limit' => 150,
                'min_order_amount' => 30.00,
                'is_active' => true,
            ],
            [
                'created_by' => 1,
                'code' => 'MEGA25',
                'discount_amount' => 25.00,
                'description' => 'Save $25 on orders above $200.',
                'expiry_date' => Carbon::now()->addMonths(5),
                'usage_limit' => 75,
                'min_order_amount' => 200.00,
                'is_active' => true,
            ],
            [
                'created_by' => 1,
                'code' => 'FLASH30',
                'discount_amount' => 30.00,
                'description' => 'Flash sale: $30 discount for 24 hours.',
                'expiry_date' => Carbon::now()->addDay(),
                'usage_limit' => 30,
                'min_order_amount' => 150.00,
                'is_active' => true,
            ],
            [
                'created_by' => 1,
                'code' => 'VIP40',
                'discount_amount' => 40.00,
                'description' => 'Exclusive $40 discount for VIP members.',
                'expiry_date' => Carbon::now()->addMonths(6),
                'usage_limit' => 100,
                'min_order_amount' => 250.00,
                'is_active' => true,
            ],
            [
                'created_by' => 1,
                'code' => 'HOLIDAYFREE',
                'discount_amount' => 0.00,
                'description' => 'Holiday offer: Free shipping on any order.',
                'expiry_date' => Carbon::now()->addMonths(1),
                'usage_limit' => 300,
                'min_order_amount' => 0.00,
                'is_active' => true,
            ],
            [
                'created_by' => 1,
                'code' => 'SAVE50',
                'discount_amount' => 50.00,
                'description' => '$50 off for orders above $300.',
                'expiry_date' => Carbon::now()->addMonths(3),
                'usage_limit' => 80,
                'min_order_amount' => 300.00,
                'is_active' => true,
            ],
        ];

        foreach ($coupons as $coupon) {
            Coupon::create($coupon);
        }
    }
}

