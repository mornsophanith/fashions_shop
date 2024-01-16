<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItemTable extends Model
{
    use HasFactory;
    protected $table = 'ordersItems';
    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'quantity',
        'price',   
    ];
}
