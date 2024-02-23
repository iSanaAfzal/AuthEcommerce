<?php

namespace App\Models;
use App\Models\PlaceOrder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
   protected $fillable = ['name', 'description', 'image', 'price'];
     public function userCarts()
    {
        return $this->hasMany(UserCart::class, 'product_id');
    }
    public function placeOrders()
    {
        return $this->hasMany(PlaceOrder::class, 'product_id');
    }


}