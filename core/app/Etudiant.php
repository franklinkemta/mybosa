<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'pays_residence', 'telephone',
        'type_piece_identite',
        'numero_piece_identite',
        'date_naissance',
        'pays_naissance',
        'ville_naissance',
        'nationalite',
        'coordones',
        'ville_residence',
        'code_postal',
        'adresse_postale',
    ];
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $garded = ['user_id', 'profil_complet'];

    // store data as JSON and retrieve them as PHP array
    // https://laravel.com/docs/5.2/eloquent-mutators#attribute-casting
    // https://laravel.com/docs/8.x/migrations
    protected $casts = [
        'selection_formations' => 'array',
    ];

    /**
     * Get the user record associated with the model.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the candidatures for the student.
     */
    public function candidatures()
    {
        return $this->hasMany('App\Candidature');
    }

    /**
     * Get the parentsEtudiant record associated with the etudiant.
     */
    public function parentsEtudiant()
    {
        return $this->hasOne('App\ParentsEtudiant');
    }

    /**
     * Get the educationsExperiencesEtudiant record associated with the etudiant.
     */
    public function educationsExperiencesEtudiant()
    {
        return $this->hasOne('App\EducationsExperiencesEtudiant');
    }

    /**
     * Get the aProposEtudiant record associated with the etudiant.
     */
    public function aProposEtudiant()
    {
        return $this->hasOne('App\AProposEtudiant');
    }
}
