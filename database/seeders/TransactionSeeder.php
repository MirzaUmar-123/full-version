<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Illuminate\Support\Str;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            [
                'user_id' => 1,
                'order_id' => 1,
                'amount' => 120.99,
                'type' => 'charge',
                'gateway' => 'stripe',
                'reference' => 'REF-' . Str::upper(Str::random(10)),
                'status' => 'success',
            ],
            [
                'user_id' => 2,
                'order_id' => 2,
                'amount' => 89.50,
                'type' => 'charge',
                'gateway' => 'paypal',
                'reference' => 'REF-' . Str::upper(Str::random(10)),
                'status' => 'success',
            ],
            [
                'user_id' => 3,
                'order_id' => 3,
                'amount' => 209.99,
                'type' => 'charge',
                'gateway' => 'stripe',
                'reference' => 'REF-' . Str::upper(Str::random(10)),
                'status' => 'success',
            ],
            [
                'user_id' => 4,
                'order_id' => 4,
                'amount' => 350.00,
                'type' => 'charge',
                'gateway' => 'paypal',
                'reference' => 'REF-' . Str::upper(Str::random(10)),
                'status' => 'pending',
            ],
            [
                'user_id' => 5,
                'order_id' => 5,
                'amount' => 75.40,
                'type' => 'charge',
                'gateway' => 'stripe',
                'reference' => 'REF-' . Str::upper(Str::random(10)),
                'status' => 'failed',
            ],
            [
                'user_id' => 2,
                'order_id' => 6,
                'amount' => 450.75,
                'type' => 'charge',
                'gateway' => 'paypal',
                'reference' => 'REF-' . Str::upper(Str::random(10)),
                'status' => 'success',
            ],
            [
                'user_id' => 3,
                'order_id' => 7,
                'amount' => 60.25,
                'type' => 'charge',
                'gateway' => 'stripe',
                'reference' => 'REF-' . Str::upper(Str::random(10)),
                'status' => 'success',
            ],
            [
                'user_id' => 1,
                'order_id' => 8,
                'amount' => 499.99,
                'type' => 'charge',
                'gateway' => 'paypal',
                'reference' => 'REF-' . Str::upper(Str::random(10)),
                'status' => 'success',
            ],
            [
                'user_id' => 4,
                'order_id' => 9,
                'amount' => 180.00,
                'type' => 'refund',
                'gateway' => 'stripe',
                'reference' => 'REF-' . Str::upper(Str::random(10)),
                'status' => 'success',
            ],
            [
                'user_id' => 5,
                'order_id' => 10,
                'amount' => 220.45,
                'type' => 'charge',
                'gateway' => 'paypal',
                'reference' => 'REF-' . Str::upper(Str::random(10)),
                'status' => 'success',
            ],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create($transaction);
        }
    }
}
