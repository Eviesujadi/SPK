<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = "alternatif";
    protected $guarded = [];

    public function keputusan(){
        return $this->hasMany('App\Keputusan');
      }

}
