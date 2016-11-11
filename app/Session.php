<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'nom','date_debut','date_fin','heure_debut','heure_fin','examen_id',
    ];

    public function convocation()
    {
        return $this->hasMany('App\Convocation');
    }

    public function examen()
    {
        return $this->belongsTo('App\Examen');
    }
}
