<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    /**
     * Get the etudiant that owns the candidature.
     */
    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }

    
    public function scopeEnvoyee($query)
    {
        return $query->where('etat', 'ENVOYEE');
    }

    public function scopeAttente($query)
    {
        return $query->where('etat', 'ATTENTE');
    }

    public function scopeTraitement($query)
    {
        return $query->where('etat', 'TRAITEMENT');
    }

    public function scopeValidee($query)
    {
        return $query->where('etat', 'VALIDEE');
    }

    public function scopeRejetee($query)
    {
        return $query->where('etat', 'REJETEE');
    }

    public function scopeNonArchive($query)
    {
        return $query->where('archive', 0);
    }

    public function scopeArchive($query)
    {
        return $query->where('archive', 1);
    }
}
