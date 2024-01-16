<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideBannerTable extends Model
{
    public $table = 'slide_banners';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
