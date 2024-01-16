<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCenterTable extends Model
{
    use HasFactory;
    public $table = 'blog_centers';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

}
