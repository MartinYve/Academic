<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $fillable = [
        'Enseignement_id',
        'heure_dep',
        'heure_fin' 
    ];

    public function enseignement()
    {
        return $this->belongsTo(\App\Enseignement::class);
    }
    public function jours()
    {
        return $this->belongsToMany(\App\Jour::class);
    }
}
