<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Airport;

/**
 * @package App
 * @property int id
 * @property int airport_id
 * @property string flight_number
 * @property int arrivalAirport_id
 * @property Carbon departure_time
 * @property Carbon arrival_time
 * @property Carbon created_at
 * @property Carbon updated_at 
 */

class Flight extends Model
{
    public function airport() {
        return $this->belongsTo(Airport::class);
    }
    protected $fillable = [
     'airports_id', 'flight_number', 'departureAirport_id'
     ];
  
}
