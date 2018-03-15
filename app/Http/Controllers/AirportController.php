<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airport;
use App\Http\Resources\Airport as AirportResource;
use App\Http\Requests;

class AirportController extends Controller
{
    public function index()
    {
        // Get airport list from DB
        $airport = Airport::orderBy('airport_name', 'asc')->paginate(20);
        
        // Return collection of airports as a resource
        return AirportResource::collection($airport);

        //Use this function to pull airport list from a static list or json file and sort Alphabetically
        
        //array stored in $book
         $book = json_decode($json, true);
            function sortAlphabetically($a, $b){
                return strcmp($a['name'], $b['name']);
            }
            usort($book, 'sortAlphabetically');
            //loop through the list 
            foreach ($book as $key ) {
                //displays the name index in book array
                echo '<br>'.$key['name']. '<br/>';
            }
        
    }

        public function store(Request $request)
    {
        //Validate input fields
        $this->validate($request, [
            'airport_name'=> 'required',
            'iata_code'=> 'required',
            'country'=> 'required',
            'state'=> 'required'
        ]);
        //check if method used is a Put method then validate if the id does not exist;
            $airport = $request->isMethod('put') ? Airport::findOrFail($request->airport_id) : new Airport;
        //insert data into airport DB tables
            $airport->airport_name = $request->input('airport_name');
            $airport->iata_code = $request->input('iata_code');
            $airport->country = $request->input('country');
            $airport->state = $request->input('state');

        if($airport->save()) {
            return new AirportResource($airport);
            return redirect('')->with('success message', 'Airport successfully Added');
        }
        
    }
    public function show($id){
         // Get airpotrt
         $airport = Airport::findOrFail($id);

         // Return single article as a resource
         return new AirportResource($airport);
     }
    
     public function destroy($id)
    {
        // Get airport
        $article = Airport::findOrFail($id);

        if($airport->delete()) {
            return new AirportResource($airport);
        }    
    }
    public function update(){

    }
    

}
