<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    protected $fillable = array('user_id', 'title','description','priority','efectivity');
}