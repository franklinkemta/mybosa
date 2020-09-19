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
        'photo', 'piece_identite', 'autres_documents',
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
        return Storage::exists($this->photo) ? Storage::url($this->photo) : null; 
    }

    /**
     * Get the etudiant's piece_identite url.
     *
     * @return string
     */
    public function getPieceIdentiteUrlAttribute()
    {   
        return Storage::exists($this->piece_identite) ? Storage::url($this->piece_identite) : null; 
    }

    /**
     * Get the etudiant's autres_documents url.
     *
     * @return string
     */
    public function getAutresDocumentsUrlAttribute()
    {   
        return Storage::exists($this->autres_documents) ? Storage::url($this->autres_documents) : null; 
    }
}
