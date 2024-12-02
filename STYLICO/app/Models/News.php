<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'news_id',
        'news_title',
        'comment',
        'create_date'
    ];
}
