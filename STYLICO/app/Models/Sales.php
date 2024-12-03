<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';

    protected $fillable = [
        'sales_id',
        'order_date',
        'payment_deadline',
        'payment_day',
        'ex_shippdate',
        'user_id',
        'total'
    ];
}
