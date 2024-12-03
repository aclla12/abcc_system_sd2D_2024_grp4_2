<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $tabel = "favorite";

    protected $fillable = [
         //favoriteカラム
        'favorite_id',
        'user_id',
        'product_id'];
}
