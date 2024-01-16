<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTable extends Model
{
    public $table = 'users';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
