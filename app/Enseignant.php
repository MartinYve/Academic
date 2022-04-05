<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'matricule' ,
        'option_id',
        'email',
        'statut',
        'password',
        'phone_number',
        'avatar'
    ];
    //
    public function enseignements()
    {
        return $this->hasMany(\App\Enseignement::class);
    }
}
