<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'image',
    ];
    protected function casts(): array
    {
        return [
            'status' => 'boolean',
        ];
    }
    // Additional model methods and relationships can be defined here
    public function products() { return $this->hasMany(Product::class); }
}
