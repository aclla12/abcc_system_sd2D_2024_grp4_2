<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sales_details extends Model
{
    protected $tabel = "sales_details";

    protected $fillable = [
        //sales_detailsカラム
        'details_id',
        'sales_id',
        'product_id',
        'product_name',
        'product_price',
        'amount'
    ];
}
