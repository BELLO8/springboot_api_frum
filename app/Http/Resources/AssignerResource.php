<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssignerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'nom_assigner' => $this->personne_vulnerable->nom,
            'prenom_assigner' => $this->personne_vulnerable->prenom,
            'contat_assigner' => $this->personne_vulnerable->telephone,
            'freq_enrg' => $this->freq_enrg . ' sec',
            'reference' => $this->dispositif->reference,
            'details' => $this->dispositif->details,
            'telephone' => $this->dispositif->telephone,
            'Adresse_ip' => $this->dispositif->Adresse_ip,
            'status' => $this->dispositif->status,
        ];
    }
}
