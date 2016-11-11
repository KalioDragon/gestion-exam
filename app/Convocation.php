<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocation extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'date_exam','heure_exam','session_id','salle_id','personne_id',
    ];


    public function personne()
    {
        return $this->belongsTo('App\Personne');
    }

    public function salle()
    {
        return $this->belongsTo('App\Salle');
    }

    public function session()
    {
        return $this->belongsTo('App\Session');
    }
}
