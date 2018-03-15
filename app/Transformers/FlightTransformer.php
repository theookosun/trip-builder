<?php

namespace App\Transformers;

use League\Fractal;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;


class FlightTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [];

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [];

    /**
     * Transform object into a generic array
     *
     * @var $resource
     * @return array
     */
    public function transform(Flight $flight)
    {
        return [

            'id' => $flight->id,
            'flight_number'=> $flight->flight_number,
            'airport_id'=>$flight->airport_id,
            'departureAirport_id'=> $flight->departureAirport_id,
            'departure_time'=>$flight->departure_time,
            'price'=> $flight->Price,
            'created_at'=> $flight->created_at->format('d M Y'),
            'updated_at'=> $flight->uppdated_at->format('d M Y')
			
        ];
    }
    public function includeAirport(Airport $airport){
        return $this->item($airport->airport_id, new FlightTransformer);
    }
}
