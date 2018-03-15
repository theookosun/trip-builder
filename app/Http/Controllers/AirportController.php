<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airport;

class AirportController extends Controller
{
    public function index(){
        return view('airports.add_airports');
    }
    public function home(){
        $airport = Airport::orderBy('created_at', 'asc')->paginate(20);
        
        return view('/airports.view_airports', ['airport' => $airport]);
    }
    public function add(Request $request){
        $this->validate($request, [
            'airport_name'=> 'required',
            'iata_code'=> 'required',
            'country'=> 'required',
            'state'=> 'required'
        ]);

       $airport= new Airport;
       $airport->airport_name = $request->input('airport_name');
       $airport->iata_code = $request->input('iata_code');
       $airport->country = $request->input('country');
       $airport->state = $request->input('state');
       $airport->save();
       return redirect('/addairports')->with('success message', 'Article successfully Added');

        }
    

}
