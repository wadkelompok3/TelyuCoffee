<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'image_url'];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function History()
    {
        return $this->hasMany(History::class);
    }
}
