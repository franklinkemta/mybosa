<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * Get the user record associated with the model.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
