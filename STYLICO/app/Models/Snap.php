<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Snap extends Model
{
    protected $table = 'snap';

    protected $fillable = [
        'snap_id',
        'product_image',
        'product_id',
        'create_date'
    ];
}
