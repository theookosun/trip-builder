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
                            <th scope="col">ID</th>
                            <th scope="col">Airport Name</th>
                            <th scope="col">IATA CODE</th>
                            <th scope="col">Country</th>
                            <th scope="col">State</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (count($airport) > 0)
                                @foreach ($airport->all() as $airports)
                          <tr>
                            <th scope="row">{{$airports->id}}</th>
                            <td>{{$airports->airport_name}}</td>
                            
                            <td>{{$airports->iata_code}}</td>
                            <td>{{$airports->country}}</td>
                            <td>{{$airports->state}}</td>
                            <td>|
                                <a href='{{url("/update/{$airports->id}") }}' class="btn btn-success">Update</a> |
                                <a href='{{url("/")}}' class="btn btn-danger">Delete</a>
                            </td>
                          </tr>

                         
                          @endforeach
                          {{ $airport->links() }}
                          @endif
                          

                        </tbody>
                        
                      </table> 
                      <a href='{{url("/update/{$airports->id}") }}' class="btn btn-success">Sort Alphabetically</a> 

        </div>
    </div>
