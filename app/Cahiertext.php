<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cahiertext extends Model
{
    protected $fillable = [
        'jour',
        'heure',
        'enseignant' ,
        'enseignement',
        'contenu',
    ];
}
