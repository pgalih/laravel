<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = array('name', 'status');
    public function users()
    {
        return $this->hasMany('App\User');
    }
}


