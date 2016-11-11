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

    public function convocation()
    {
        return $this->hasMany('App\Convocation');
    }

    public function batiment()
    {
        return $this->hasOne('App\Batiment');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
