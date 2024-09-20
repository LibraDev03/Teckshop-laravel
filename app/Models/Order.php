<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $append = ['totalPrice'];
    protected $fillable = [
        'name_orderer',
        'name_consignee',
        'phone_consignee',
        'email_orderer',
        'address_consignee',
        'order_notes',
        'payment_method',
        'user_id',
    ];

    public function details() {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    public function getTotalPriceAttribute() {
        $t = 0;

        foreach($this->details as $item) {
            $t += $item->price * $item->quantity + 7000;
        }
        return  $t;
    }
}
