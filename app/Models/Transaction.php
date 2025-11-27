<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
'user_id',
'order_id',
'amount',
'type', // charge, refund, payout
'gateway',
'reference', // gateway reference
'status',
];
    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
        ];
    }
    // Additional model methods and relationships can be defined here
    public function payment() { return $this->belongsTo(Payment::class); }
}
