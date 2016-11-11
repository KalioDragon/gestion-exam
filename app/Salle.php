<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'nom','batiment_id',
    ];

    public function convocation()
    {
        return $this->hasMany('App\Convocation');
    }

    public function batiment()
    {
        return $this->belongsTo('App\Batiment');
    }
}
