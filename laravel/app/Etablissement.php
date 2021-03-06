<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','nom', 'sigle', 'pays', 'ville', 'telephone',
        'siteweb', 'adresse', 'email_contact', 'coordonees',
    ];

    /**
     * Get the user record associated with the model.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the formations for the etablissement.
     */
    public function formations()
    {
        return $this->hasMany('App\Formation');
    }

    /**
     * Get the candidatures for the etablissement.
     */
    public function candidatures()
    {
        return $this->hasMany('App\Candidature');
    }
}
