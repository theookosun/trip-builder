<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flight;

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
