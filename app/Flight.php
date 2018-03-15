<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Airport;

class Flight extends Model
{
    public function airport() {
        return $this->belongsTo(Airport::class);
    }
    protected $fillable = [
     'airports_id', 'flight_number', 'departureAirport_id'
     ];
  
}
