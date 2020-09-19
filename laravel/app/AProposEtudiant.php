<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Casts\CheckBox;

class AProposEtudiant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'etudiant_id',
        'langue_arabe', 'langue_francais', 'langue_anglais', 
        'langue_espagnol', 'langue_allemand', 'langue_autres',
        'sejours_etranger', 'pays_sejours_etranger',
        'loisirs', 'sports', 'autres_activites', 'motivations_candidatures', 'projets_carriere'
    ];

    /**
     * Get the etudiant record associated with the model.
     */
    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }
}
