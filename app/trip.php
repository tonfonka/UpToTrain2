<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trip extends Model
{
    protected $table ="trips";
    public $timestamps = true;
    public function trip(){
        return $this->belongsTo('App\travelagency','id');
    }
}
