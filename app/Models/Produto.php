<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
        'stock_quantity'
    ];
}
