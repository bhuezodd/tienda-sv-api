<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'img',
        'description',
        'regular_price',
        'sale_price',
        'stock_qty'
    ];
}
