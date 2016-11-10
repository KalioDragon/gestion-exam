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
}
