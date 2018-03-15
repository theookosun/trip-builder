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
                            @if (count($todos) > 0)
                                @foreach ($todos->flight as $todo)
                        <tr>
                          <th scope="row">{{$todo->flight_number}}</th>
                            <td>{{$todo->airport->airport_name}}</td>
                            <td>{{$todo->airport->iata_code}}</td>
                            <td>{{$todo->airport->country}}</td>
                            <td>{{$todo->airport->state}}</td>
                            <td>{{$todo->departure_time}}</td>
                            <td>{{$todo->arrival_time}}</td>
                            <td style="font-size:3.2em;">${{ $todo->Price }}</td>
                            

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
