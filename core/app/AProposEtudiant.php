<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'langue_espagnol', 'langue_allemand', 'langue_autre',
        'sejours_etranger', 'pays_sejours_etranger',
        'loisirs', 'sports', 'autres_activites', 'motivation_candidature', 'projets_carriere'
    ];
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $garded = ['section_complete'];

    /**
     * Get the etudiant record associated with the model.
     */
    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }
}
