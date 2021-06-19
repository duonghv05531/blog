<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'cate_id',
        'name',
        'price',
        'description',
        'star',
    ];
}
