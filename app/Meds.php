<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meds extends Model
{
    protected $fillable = ['user_id','name','dose','rem'];    
}
