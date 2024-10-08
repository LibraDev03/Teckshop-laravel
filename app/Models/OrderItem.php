<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'price',
        'total',
        'order_id',
        'product_id',
    ];

    public function product() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
