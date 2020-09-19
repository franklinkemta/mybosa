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
            'diplome_id' => $this->diplome_id,
            'diplome_niveau' => $this->diplome_niveau, //$this->diplome->niveau,  // got by jointure query
            'etablissement_id' => $this->etablissement_id,
            'etablissement_sigle' => $this->etablissement_sigle, // $this->etablissement->nom, // got by jointure query
            'etablissement_nom' => $this->etablissement_nom, // $this->etablissement->nom, // got by jointure query
            'etablissement_ville' =>  $this->etablissement_ville, // $this->etablissement->ville, // got by jointure query
            
            'intitule_filiere' => $this->intitule_filiere,// $this->etablissement_intitule_filiere,
            'specialite' => $this->specialite,
            'prix' => $this->prix,
            'duree' => $this->duree,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
