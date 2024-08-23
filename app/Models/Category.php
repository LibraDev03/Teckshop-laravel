<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        'name'
    ];

    // 1 danh mục thì có nhiều sản phẩm 
    public function products() {
        return $this->hasMany(Product::class, 'category_id','id')->orderBy('created_at','DESC');
    }
}
