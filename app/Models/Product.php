<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'discount_price',
        'stock',
        'image',
        'status',
    ];
    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'discount_price' => 'decimal:2',
            'stock' => 'integer',
        ];
    }

    // Additional model methods and relationships can be defined here
    public function brand() { return $this->belongsTo(Brand::class); }
public function category() { return $this->belongsTo(Category::class); }
public function reviews() { return $this->hasMany(Review::class); }
public function orderItems() { return $this->hasMany(OrderItem::class); }
public function wishlists() { return $this->hasMany(Wishlist::class); }
}
