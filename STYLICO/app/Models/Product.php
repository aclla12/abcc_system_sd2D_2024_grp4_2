<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $primaryKey = "product_id";

    protected $fillable = [
        //productカラム
        'product_id',
        'product_name',
        'product_detail',
        'product_price',
        'product_stock',
        'product_image',
        'color_name'
    ];
}
