<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'date','heure','module_id',
    ];

    public function module()
    {
        return $this->belongsTo('App\Module');
    }

    public function session()
    {
        return $this->hasMany('App\Session');
    }
}
