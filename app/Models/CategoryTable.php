<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTable extends Model
{
   public $table = 'categories';
   public $primaryKey = 'id';
   public $incrementing = true;
   public $timestamps = false;
}
