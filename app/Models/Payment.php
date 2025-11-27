<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
    'order_id',
    'payment_method',
    'transaction_id',
    'amount',
    'status',
];
    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
        ];
    }
    // Additional model methods and relationships can be defined here
    public function user() { return $this->belongsTo(User::class); }
public function order() { return $this->belongsTo(Order::class); }
public function transaction() { return $this->hasOne(Transaction::class); }
}
