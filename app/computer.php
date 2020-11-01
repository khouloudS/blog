<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    //
    protected $fillable = [
       'macAdress', 'model', 'system', 'purchase',
    ];
    public function computer() {
        return $this->belongsTo('App\computer');
    }
    public function departement() {
        return $this->belongsTo('App\departement');
    }
}
