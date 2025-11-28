<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;
use Illuminate\Support\Str;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            [
                'user_id' => 1,
                'order_id' => 1,
                'payment_method' => 'credit_card',
                'transaction_id' => 'TXN-' . Str::upper(Str::random(10)),
                'amount' => 120.99,
                'status' => 'paid',
            ],
            [
                'user_id' => 2,
                'order_id' => 2,
                'payment_method' => 'paypal',
                'transaction_id' => 'TXN-' . Str::upper(Str::random(10)),
                'amount' => 89.50,
                'status' => 'paid',
            ],
            [
                'user_id' => 3,
                'order_id' => 3,
                'payment_method' => 'debit_card',
                'transaction_id' => 'TXN-' . Str::upper(Str::random(10)),
                'amount' => 209.99,
                'status' => 'paid',
            ],
            [
                'user_id' => 4,
                'order_id' => 4,
                'payment_method' => 'cash_on_delivery',
                'transaction_id' => 'TXN-' . Str::upper(Str::random(10)),
                'amount' => 350.00,
                'status' => 'pending',
            ],
            [
                'user_id' => 5,
                'order_id' => 5,
                'payment_method' => 'paypal',
                'transaction_id' => 'TXN-' . Str::upper(Str::random(10)),
                'amount' => 75.40,
                'status' => 'failed',
            ],
            [
                'user_id' => 1,
                'order_id' => 6,
                'payment_method' => 'credit_card',
                'transaction_id' => 'TXN-' . Str::upper(Str::random(10)),
                'amount' => 450.75,
                'status' => 'paid',
            ],
            [
                'user_id' => 2,
                'order_id' => 7,
                'payment_method' => 'debit_card',
                'transaction_id' => 'TXN-' . Str::upper(Str::random(10)),
                'amount' => 60.25,
                'status' => 'paid',
            ],
            [
                'user_id' => 3,
                'order_id' => 8,
                'payment_method' => 'credit_card',
                'transaction_id' => 'TXN-' . Str::upper(Str::random(10)),
                'amount' => 499.99,
                'status' => 'paid',
            ],
            [
                'user_id' => 4,
                'order_id' => 9,
                'payment_method' => 'paypal',
                'transaction_id' => 'TXN-' . Str::upper(Str::random(10)),
                'amount' => 180.00,
                'status' => 'paid',
            ],
            [
                'user_id' => 5,
                'order_id' => 10,
                'payment_method' => 'credit_card',
                'transaction_id' => 'TXN-' . Str::upper(Str::random(10)),
                'amount' => 220.45,
                'status' => 'paid',
            ],
        ];

        foreach ($payments as $payment) {
            Payment::create($payment);
        }
    }
}

