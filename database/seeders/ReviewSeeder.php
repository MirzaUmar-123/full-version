<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'user_id' => 1,
                'product_id' => 2,
                'rating' => 5,
                'title' => 'Excellent product!',
                'body' => 'This product exceeded my expectations. High quality and fast shipping.',
                'status' => 'approved',
                'helpful_count' => 12,
            ],
            [
                'user_id' => 2,
                'product_id' => 3,
                'rating' => 4,
                'title' => 'Very good',
                'body' => 'Overall satisfied. Minor issues but nothing serious.',
                'status' => 'approved',
                'helpful_count' => 8,
            ],
            [
                'user_id' => 3,
                'product_id' => 1,
                'rating' => 3,
                'title' => 'Average product',
                'body' => 'It works okay but could be improved in some areas.',
                'status' => 'approved',
                'helpful_count' => 3,
            ],
            [
                'user_id' => 4,
                'product_id' => 4,
                'rating' => 5,
                'title' => 'Highly recommend!',
                'body' => 'Fantastic product. Great value for money.',
                'status' => 'approved',
                'helpful_count' => 15,
            ],
            [
                'user_id' => 5,
                'product_id' => 5,
                'rating' => 2,
                'title' => 'Not satisfied',
                'body' => 'The product did not meet my expectations. Poor build quality.',
                'status' => 'approved',
                'helpful_count' => 1,
            ],
            [
                'user_id' => 1,
                'product_id' => 6,
                'rating' => 4,
                'title' => 'Good product',
                'body' => 'Works well, would purchase again.',
                'status' => 'approved',
                'helpful_count' => 5,
            ],
            [
                'user_id' => 2,
                'product_id' => 7,
                'rating' => 5,
                'title' => 'Perfect!',
                'body' => 'Exactly what I needed. Excellent quality.',
                'status' => 'approved',
                'helpful_count' => 10,
            ],
            [
                'user_id' => 3,
                'product_id' => 8,
                'rating' => 3,
                'title' => 'It’s okay',
                'body' => 'Not bad, but not great either.',
                'status' => 'approved',
                'helpful_count' => 2,
            ],
            [
                'user_id' => 4,
                'product_id' => 2,
                'rating' => 4,
                'title' => 'Good value',
                'body' => 'Fair price and good performance.',
                'status' => 'approved',
                'helpful_count' => 7,
            ],
            [
                'user_id' => 5,
                'product_id' => 3,
                'rating' => 5,
                'title' => 'Loved it!',
                'body' => 'Exceeded expectations in every way. Will buy again.',
                'status' => 'approved',
                'helpful_count' => 20,
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
