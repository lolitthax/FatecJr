<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $fillable = ['id','user_mg', 'pass_mg','role_mg'];
}
