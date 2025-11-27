<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
    'order_id',
    'product_id',
    'price',
    'quantity',
    'total',
];
    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'quantity' => 'integer',
            'total' => 'decimal:2',
        ];
    }
    // Additional model methods and relationships can be defined here
    public function order() { return $this->belongsTo(Order::class); }
public function product() { return $this->belongsTo(Product::class); }

}
