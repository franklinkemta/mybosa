<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Diplome as DiplomeResource;
use App\Diplome;

class DiplomeController extends Controller
{   
    protected $model = Diplome::class;
    
    public function get(Request $request) {
        $model = $this->model;
        $query = null;
        
        // get parameters
        $niveau = $request->input('niveau');
        $domaine = $request->input('domaine');
        $limit = $request->input('limit');

        $query = $model::where('domaine', '=', $domaine);

        if ($niveau) $query->where('niveau', '=', $niveau);

        
        $query->orderBy('domaine', 'asc');
        if ($limit) $query->limit($limit);

        return DiplomeResource::collection($query->get());
    }
}
