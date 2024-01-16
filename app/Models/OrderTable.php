<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTable extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'first_naem',
        'last_name',
        'company_name',
        'country',
        'address',
        'post_code',
        'city',
        'province',
        'phone',
        'email_address',
    ] ;
}
