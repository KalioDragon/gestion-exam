<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sousbatiment extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'nom','batiment_id',
    ];

    public function batiment()
    {
        return $this->belongsTo('App\Batiment');
    }
}
