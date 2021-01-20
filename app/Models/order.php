<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'products',
        'date'
    ];

    public function product(){
        return $this-> belongsToMany(
            product::class,
            'order_product',
            'product_id',
            'order_id'
        );
    }
}
