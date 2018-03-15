<?php

namespace App\Transformers;

use League\Fractal;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;


class AirportTransformer extends TransformerAbstract
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
    protected $defaultIncludes = ['flights'];

    /**
     * Transform object into a generic array
     *
     * @var $resource
     * @return array
     */
    public function transform(Airport $airport)
    {
        return [

            'id' => $airport->id,
            'airport_name'=> $airport->airport_name,
            'iata_code'=>$airport->iata_code,
            'country'=>$airport->country,
            'state'=> $airport->state
			
        ];
    }
    public function includeFlights(Airport $airport){
        return $this->collection($airport->flights, new FlightTransformer);
    }
}
