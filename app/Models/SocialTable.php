<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialTable extends Model
{
    public $table = 'social_medias';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
