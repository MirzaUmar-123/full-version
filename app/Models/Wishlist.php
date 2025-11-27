<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
    'user_id',
    'product_id',
];
     // Additional model methods and relationships can be defined here
    public function user(){return $this->belongsTo(User::class);}
    public function product(){return $this->belongsTo(Product::class);}
}
