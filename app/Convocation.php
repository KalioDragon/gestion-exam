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
    
    
    
}
