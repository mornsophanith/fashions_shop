<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartTable extends Model
{
    use HasFactory;
    protected $tabble = 'carts';
    protected $fillable = [
        'product_id',
        'customer_id',
        'product_name',
        'quantity',
        'price',   
    ];
}
