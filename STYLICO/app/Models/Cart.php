<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $tabel = "cart";

    protected $fillable = [
        //cartカラム
        'user_id',
        'product_id',
        'amount'
    ];

    public function user(){
        return $this->belongsTo(Account::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
