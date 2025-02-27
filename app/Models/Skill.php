<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['id','name','type','percentage','is_focusable','user_id'];
}
