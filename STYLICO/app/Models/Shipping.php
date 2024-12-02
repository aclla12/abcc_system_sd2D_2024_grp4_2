<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $table = 'shipping';

    protected $fillable = [
        'sales_id',
        'ex_shippdate',
        'shipping_status'
    ];
}
