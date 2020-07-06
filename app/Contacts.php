<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = ['id','name_cont', 'email_cont', 'msg_cont'];
}
