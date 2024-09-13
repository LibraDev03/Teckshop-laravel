<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
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
}
