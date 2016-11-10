<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'nom','prenom','adresse','email','tel','annee','formation','frais','etablissement','emplois','etabissement','employeur','role',
    ];

    
    
}
