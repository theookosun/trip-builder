<?php

namespace App\Http\Controllers;
use App\Flight;
use DB;
use App\Airport;
use App\FlightServiceFunctions;
use App\Http\Resources\Flight as FlightResource;
use App\Http\Requests;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // Get flight list from DB
        $flight = Flight::orderBy('flight_number', 'asc')->paginate(20);
        // Return collection of airports as a resource
        return FlightResource::collection($flight);        
    }

    //list available flights for a particular destination

    public function flightsearch (Request $request){
            //collect user input 
             $departure = $request->input('departure');
            if(!empty($departure)){
            //Search query
           $flight = Airport::with('flight')->where('country', $term)->first();
           //return the flight details as json file
           return response()->json($todos);
          // or by doing this
           return FlightResource::collection($flight);
          //Tested in the View below
           return view('flights.flights', ['todos' => $todos]);
         
}
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
       
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flight = $request->isMethod('put') ? Flight::findOrFail($request->flight_id) : new Flight;

        $article->airport_id = $request->input('airport_id');
        $article->title = $request->input('title');
        $article->body = $request->input('body');

        if($article->save()) {
            return new ArticleResource($article);
        }    
    }
    public function addFlights(Request $request)
    {
        //adding a flight to your trip
        $this->flights->validate($request->all());
        try {
            $flight = $this->flights->createFlight($request);
            return response()->json($flight, 201);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parameters = request()->input();
        $parameters['flight_number'] = $id;
        $data = $this->flights->getFlights($parameters);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->flights->validate($request->all());
        
        try {
            $flight = $this->flights->updateFlight($request, $id);
            return response()->json($flight, 200);
        } 
        catch (ModelNotFoundException $ex) {
            throw $ex;
        }
        catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    /*

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        try {
            $flight = Flight::findOrFail($id);

        if($flight->delete()) {
            return new FlightResource($flight);    
            return response()->make('', 204);
        } 
    }
        catch (ModelNotFoundException $ex) {
            throw $ex;
        }
        catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
   
}
