<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    protected $fillable = [
        'quantity' ,'product_id', 'cart_id'
    ];
}
