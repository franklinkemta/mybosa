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
        'user_id', 'nom', 'prenom', 'pays_residence', 'telephone',
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
    protected $garded = [
        'section0_remplie', 
        'section1_remplie', 'section2_remplie',
        'section3_remplie', 'section4_remplie'
    ];

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

    /**
     * Get the documentsEtudiant record associated with the etudiant.
     */
    public function documentsEtudiant()
    {
        return $this->hasOne('App\DocumentsEtudiant');
    }

    /**
     * Get the etudiant's nom complet.
     *
     * @return string
     */
    public function getNomCompletAttribute()
    {
        return "{$this->prenom} {$this->nom}";
    }

    /**
     * Set the etudiant's nom.
     *
     * @param  string  $value
     * @return void
     */
    /*
    public function setNomAttribute($value)
    {
        $this->attributes['nom'] = ucfirst($value);
    }
    */

    /**
     * Get the etudiant's profil complet.
     *
     * @return string
     */
    public function getProfilCompletAttribute()
    {   
        // return if all the sections were edited
        return $this->section0_remplie && $this->section1_remplie && $this->section2_remplie && $this->section3_remplie && $this->section4_remplie;
    }
}
