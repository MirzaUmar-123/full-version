<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
'user_id',
'product_id',
'rating', // integer
'title',
'body',
'status', // approved/pending/spam
'helpful_count',
];
    protected function casts(): array
    {
        return [
            'rating' => 'integer',
            'helpful_count' => 'integer',
        ];
    }
    // Additional model methods and relationships can be defined here
    public function user() { return $this->belongsTo(User::class); }
public function product() { return $this->belongsTo(Product::class); }
}
