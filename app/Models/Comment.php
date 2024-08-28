<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'user_id',
        'product_id'
    ];

    public function cus() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
