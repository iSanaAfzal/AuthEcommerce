<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    // Assuming 'Quantity' is the field name in your 'carts' table
protected $fillable = [ 'Image','Product_Name', 'quantity', 'price','total' ];

public function user()
{
    return $this->belongsTo(User::class);
}

public function products()
{
    return $this->belongsToMany(Product::class)->withPivot('quantity');
}

}
