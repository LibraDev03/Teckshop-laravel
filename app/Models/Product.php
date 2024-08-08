<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desciption',
        'price',
        'category_id',
        'image',
    ];

    public function cat() {
        return $this->hasOne(Category::class, 'id' ,'category_id');
    }
}
