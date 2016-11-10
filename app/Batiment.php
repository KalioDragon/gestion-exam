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


}
