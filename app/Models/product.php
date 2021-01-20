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

    public function order(){
        return $this-> belongsToMany(
            order::class,
            'order_product',
            'order_id',
            'product_id'
        );
    }

    public function category(){
        return $this-> belongsToMany(
            category::class,
            'category_product',
            'category_id',
            'product_id'
            
            
        );
    }
}
