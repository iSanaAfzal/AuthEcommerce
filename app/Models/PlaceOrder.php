<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;
class PlaceOrder extends Model
{
    use HasFactory;
    protected $table = 'place_orders';
    protected $fillable = [
        'name',
        'email',
        'phone_no',
        'address',
        'country',
        'city',
        'user_id',
    'product_id',
    'order_status'

    ];
  public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
