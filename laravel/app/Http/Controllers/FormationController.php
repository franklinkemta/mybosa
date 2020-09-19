<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Formation as FormationResource;

use Illuminate\Support\Facades\Auth;

use App\Formation;
use App\Etudiant;

class FormationController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth:api', ['except' => []]);
    }

    public function get(Request $request) {
        // $criteres = $request->only('diplome_id', 'pays', 'ville');
        
        // get parameters
        $diplome_id = $request->input('diplome_id');
        $etablissement_pays = $request->input('pays');
        $etablissement_ville = $request->input('ville');
        $prix = $request->input('prix');
        $limit = $request->input('limit');

        $query = Formation::where('diplome_id', '=', $diplome_id); // make sure that diplome is an object
        
        // Join to the diplome to get the associated diplome columns
        $query = $query->leftJoin('diplomes', 'diplomes.id', 'formations.diplome_id');

        // Join to the etablissement to get the associated etablissement columns
        $query = $query->leftJoin('etablissements', 'etablissements.id', 'formations.etablissement_id');
        
        if ($etablissement_pays)  {
            $query->where('etablissements.pays', '=', $etablissement_pays);
        }
        if ($etablissement_ville) {
            $query->where('etablissements.ville', '=', $etablissement_ville);
        }
        if ($prix) $query->whereBetween('prix', $prix); // array(30000, 40000)
        
        // define fields to select
        $query->select('formations.*', 'formations.intitule_filiere as intitule_filiere', 'diplomes.niveau as diplome_niveau', 'etablissements.sigle as etablissement_sigle', 'etablissements.nom as etablissement_nom','etablissements.pays as etablissement_pays','etablissements.ville as etablissement_ville');

        $query->orderBy('score', 'desc');
        
        if ($limit) $query->limit($limit);

        return FormationResource::collection($query->get());
    }

    /**
     * Save the etudiant selection_formations
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function saveSelectionFormationsEtudiant(Request $request) {
        $user = Auth::user();
        $etudiant = $user->etudiant;
        if ($request->has('selection_formations')) {
            $etudiant->selection_formations = $request->input('selection_formations');
            $etudiant->save();
            return response()->json('success', 200);
        } else return response()->json('error', 400); // 500 is when we got an error manipulating a valid endpoint like in a trycatch
        
    }
}
