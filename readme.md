# trip-builder
-Trip Builder is an API that allows you manage front-end Flight search needs. The functionalities include:
Airport Listings, Flight Search(From Departing Location to Country of Choice), Adding Flights to Itinerary, Deleting Flights From Itinerary etc..

-The FlightSearch and Airport Functionalities are contained in the Controllers Folder  App\Http\Controller. The data passed at the end of the function calls have been converted to Json using Laravel's inbuilt (Resource::collection) and can be edited as you like by setting the fields in the App\Resources\AirportResource File. 

-Dummy/Mock data has been used to represent some Airport fields(iata_code) Flight Details(Flight_number, ArrivalTime, DepartureTime) using the Faker::class.




Note: The API was built and tested on a local server. Direct API calls can not be made wihout re-configuring the development servers and database to contain real info in place of the dummy data.