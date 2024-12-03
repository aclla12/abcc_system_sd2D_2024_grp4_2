<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = "user";

    protected $fillable = [
        //userカラム
        'user_id',
        'login_id',
        'user_pass',
        'user_name',
        'user_birthday',
        'user_add',
        'address_detail',
        'user_number',
        'user_gender',
        'user_point'
    ];
}
