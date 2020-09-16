<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    /**
     * Get the formations for the diplome.
     */
    public function formations()
    {
        return $this->hasMany('App\Formation');
    }

    /**
     * Get the candidatures for the diplome.
     */
    public function candidatures()
    {
        return $this->hasMany('App\Candidature');
    }
}
