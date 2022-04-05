<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    public function periodes()
    {
        return $this->belongsToMany(\App\Periode::class);
    }
}
