<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    //
    protected $fillable = [
        'name', 'domain',
    ];
    public function departement() {
        return $this->belongsTo('App\departement');
    }

}
