<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


// to get documents urls
use Illuminate\Support\Facades\Storage;

class DocumentsEtudiant extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'etudiant_id',
        'photo', 'passeport',
    ];
    
    /**
     * Get the etudiant record associated with the model.
     */
    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }

     /**
     * Get the etudiant's photo url.
     *
     * @return string
     */
    public function getPhotoUrlAttribute()
    {   
        // dd($this->photo);
        return Storage::exists($this->photo) ? Storage::url($this->photo) : 'images/avatar_place_holder.png'; 
    }
}
