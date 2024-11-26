<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class STYLICO extends Model
{
    use HasFactory;

    const CREATE_AT = NULL;
    const UPDATE_AT = NULL;

    protected $table = "stylico";

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
        'user_point',

        //favoriteカラム
        'favorite_id',
        'user_id',
        'product_id',

        //cartカラム
        'cart_id',
        'user_id',
        'product_id',
        'amount',

        //mysizeカラム
        'user_id',
        'height',
        'weight',
        'feet_size',
        'clothes_size'
    ];

}
