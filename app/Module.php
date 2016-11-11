<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'nom','note_minimal',
    ];


    public function examen()
    {
        return $this->hasMany('App\Examen');
    }
    
}
