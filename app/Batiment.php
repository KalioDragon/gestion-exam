<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'nom','personne_id',
    ];

    public function salle()
    {
        return $this->hasMany('App\Salle');
    }

    public function sousbatiment()
    {
        return $this->hasMany('App\Sousbatiment');
    }

    public function personne()
    {
        return $this->belongsTo('App\Personne');
    }
}
