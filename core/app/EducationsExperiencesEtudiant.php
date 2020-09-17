<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationsExperiencesEtudiant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'etudiant_id',
        'formations_recentes', 'diplomes_recents', 'experiences_professionnelles',
    ];
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $garded = ['section_complete'];

    // Cast the Model Json attributes to PHP array
    protected $casts = [
        'formations_recentes' => 'array',
        'diplomes_recents' => 'array',
        'experiences_professionnelles' => 'array',
    ];

    /**
     * Get the etudiant record associated with the model.
     */
    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }
}
