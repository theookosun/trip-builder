<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Flight extends JsonResource
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
        'airport_id' => $this->airport_id,
        'flight_number' => $this->flight_number,
        'arrivalAirport_id'=> $this->arrival_id,
        'departure_time'=> $this->departure_time,
        'arival_time'=>$this->arrival_time,
        'price'=> $this->Price
    ];
}
public function with($request) {
    return [
        'version' => '1.0.0',
        'author_url' => url('http://theookosun.com')
    ];
}
    }

