<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\CartSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\CouponSeeder;
use Database\Seeders\OrderSeeder;
use Database\Seeders\OrderItemSeeder;
use Database\Seeders\PaymentSeeder;
use Database\Seeders\ReviewSeeder;
use Database\Seeders\ShipmentSeeder;
use Database\Seeders\TransactionSeeder;
use Database\Seeders\WishlistSeeder;
use Database\Seeders\UserSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ProductSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderItemSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(ShipmentSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(WishlistSeeder::class);
        $this->call(UserSeeder::class);
    }
}
