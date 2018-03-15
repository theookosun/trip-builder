<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flight;

/**
 * @package App
 * @property int id
 * @property string airport_name
 * @property string iata_code
 * @property string country
 * @property string state
 * @property Carbon created_at
 * @property Carbon updated_at 
 */

class Airport extends Model
{
    
    public function flight(){
        
       return $this->hasMany(Flight::class);
    }

    public function arrivingFlights() {
        return $this->hasMany(Flight::class, 'arrivalAirport_id');
    }
    public function departingFlights() {
        return $this->hasMany(Flight::class, 'depatureAirport_id');
    }
}
