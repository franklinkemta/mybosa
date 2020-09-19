<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    /**
     * Get the candidatures for the formation.
     */
    public function candidatures()
    {
        return $this->hasMany('App\Candidature');
    }

    /**
     * Get the diplome that owns the Formation.
     */
    public function diplome()
    {
        return $this->belongsTo('App\Diplome');
    }

    /**
     * Get the etablissement that owns the Formation.
     */
    public function etablissement()
    {
        return $this->belongsTo('App\Etablissement');
    }
}
