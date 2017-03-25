<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function worker()
    {

        return $this->belongsTo('App\User','worker_id','id');
    }
}
