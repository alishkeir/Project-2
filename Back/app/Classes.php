<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = "classes";
    
    protected $fillable = ["className"]; 

    public $timestamps = false;
}
