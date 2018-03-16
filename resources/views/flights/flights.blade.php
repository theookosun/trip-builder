@include('airports.header')
@include('layouts.app')
    <div class="container">
        <div class="row">
                
                   
                   
                    @if (session('success message'))
                        <div class="alert alert-success"> {{session('success message')}}</div>

                   
                   
        </div>
                @endif
                <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Flight Number</th>
                            <th scope="col">Departure Airport</th>
                            <th scope="col">IATA CODE</th>
                            <th scope="col">Country</th>
                            <th scope="col">State</th>
                            <th scope="col">Departure Time</th>
                            <th scope="col">Arrival Time</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                                           
                         <tbody>
                            @if (count($flightsrch) > 0)
                                @foreach ($flightsrch->flight as $todo)
                        <tr>
                          <th scope="row">{{$flightsrch->flight_number}}</th>
                            <td>{{$flightsrch->airport->airport_name}}</td>
                            <td>{{$flightsrch->airport->iata_code}}</td>
                            <td>{{$flightsrch->airport->country}}</td>
                            <td>{{$flightsrch->airport->state}}</td>
                            <td>{{$flightsrch->arrival_time}}</td>
                            <td style="font-size:3.2em;">${{ $flightsrch->Price }}</td>
                            

                            <td>
                                <a href='{{url("/update/") }}' class="btn btn-success">Book Now</a> 
                              
                            </td>
                          </tr>

                         
                          @endforeach
                     {{ $todos->links() }}
                          
                          @endif
                          

                        </tbody>
                        
                      </table> 
                      <a href='{{url("/") }}' class="btn btn-success">Sort Alphabetically</a> 

        </div>
    </div>
