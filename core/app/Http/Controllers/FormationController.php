<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Formation as FormationResource;
use App\Formation;

class FormationController extends Controller
{
    protected $model = Formation::class;
    
    public function get(Request $request) {
        $model = $this->model;
        $query = null;
        
        // get parameters
        $diplome_id = $request->input('diplome_id');
        $etablissement_pays = $request->input('pays');
        $etablissement_ville = $request->input('ville');
        $prix = $request->input('prix');
        $limit = $request->input('limit');

        $query = $model::where('diplome_id', '=', $diplome_id); // make sure that diplome is an object

        if ($etablissement_pays) $query->where('etablissement_pays', '=', $etablissement_pays);
        if ($etablissement_ville) $query->where('etablissement_ville', '=', $etablissement_ville);
        if ($prix) $query->whereBetween('prix', $prix); // array(30000, 40000)
        
        $query->orderBy('score', 'desc');
        if ($limit) $query->limit($limit);

        return FormationResource::collection($query->get());
    }
}
