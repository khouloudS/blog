<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class computerUser extends Model
{
    //
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function computer() {
        return $this->belongsTo('App\computer');
    }

}
