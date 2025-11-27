<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
    'order_id',
    'tracking_number',
    'carrier',
    'status',
    'shipped_at',
    'delivered_at',
];
    protected function casts(): array
    {
        return [
            'shipped_at' => 'datetime',
            'delivered_at' => 'datetime',
        ];
    }
    // Additional model methods and relationships can be defined here
    public function order() { return $this->belongsTo(Order::class); }
public function user() { return $this->belongsTo(User::class); }
}
