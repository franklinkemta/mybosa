<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Formation extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'diplome_niveau' => $this->diplome_niveau,
            'etablissement_nom' => $this->etablissement_nom,
            'etablissement_intitule_filiere' => $this->etablissement_intitule_filiere,
            'etablissement_specialite' => $this->etablissement_specialite,
            'etablissement_ville' => $this->etablissement_ville,
            'prix' => $this->prix,
            'duree' => $this->duree,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
