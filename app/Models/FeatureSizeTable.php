<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureSizeTable extends Model
{
    public $table = 'feature_size';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
