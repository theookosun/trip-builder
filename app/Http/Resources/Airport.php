<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Airport extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'airport_name' => $this->airport_name,
            'iata_code' => $this->iata_code,
            'country'=> $this->country,
            'state'=>$this->state
        ];
    }
}
