<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryTable extends Model
{
    public $table = 'sub_categories';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
