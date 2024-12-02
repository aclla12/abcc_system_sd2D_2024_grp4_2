<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mysize extends Model
{
    use HasFactory;

    protected $table = "my size";

    protected $fillable = [
        //mysizeカラム
        'user_id',
        'height',
        'weight',
        'feet_size',
        'clothes_size'
    ];
}
