<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Car extends Model
{
    public  function Player()
    {
        return $this->belongsTo('App\Player');
    }
}
