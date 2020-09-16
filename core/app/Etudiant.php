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
        'user_id','nom', 'prenom', 'pays', 'phone',
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
}
