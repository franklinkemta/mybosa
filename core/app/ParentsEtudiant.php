<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentsEtudiant extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'etudiant_id',
        'nom_prenom_pere', 'profession_pere', 'telephone_pere',
        'nom_prenom_mere', 'profession_mere', 'telephone_mere',
        'nom_prenom_tuteur', 'profession_tuteur', 'telephone_tuteur', 'parente_tuteur',
        'adresse_postale',
        'email'
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
