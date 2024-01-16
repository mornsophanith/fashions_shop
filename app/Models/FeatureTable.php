<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureTable extends Model
{
    public $table = 'features';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
