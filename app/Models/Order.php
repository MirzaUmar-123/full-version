<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
    'order_number',
    'status', // pending, paid, shipped, delivered, cancelled
    'total_amount',
    'payment_method',
    'shipping_address',
    'billing_address'
    ];
    protected function casts(): array
    {
        return [
            'total_amount' => 'decimal:2',
            'shipping_address' => 'string',
            'billing_address' => 'string',
        ];
    }
    // Additional model methods and relationships can be defined here
    public function user() { return $this->belongsTo(User::class); }
public function items() { return $this->hasMany(OrderItem::class); }
public function shipment() { return $this->hasOne(Shipment::class); }
public function payment() { return $this->hasOne(Payment::class); }
public function coupon() { return $this->belongsTo(Coupon::class); }
}
