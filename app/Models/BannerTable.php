<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerTable extends Model
{
    public $table = 'banners';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
