<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureImgTable extends Model
{
    public $table = 'feature_img';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
