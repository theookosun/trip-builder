@include('airports.header')
<div class="container">
        <div class="row">
            <div class="col-md-6">
                    @if (session('success message'))
                    <div class="alert alert-success"> {{session('success message')}}</div>
                    @endif
                    <form class="form-horizontal "method="POST" action="{{'/insert'}}">  {{ csrf_field() }}
                    
                    <fieldset>
                      <legend>Add Airports</legend>
                      @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger"> {{$error}}</div>
                        @endforeach
                        @endif  
                      <div class="form-group row">
                         <div class="col-sm-10">
                                
                        </div>
                      </div>
                      <div class="form-group">
                           
                        <label for="exampleInputEmail1">Airport Name</label>
                        
                        <input type="text" class="form-control" name="airport_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Airport Name">
                        <small id="emailHelp" class="form-text text-muted">Enter your favourite airport </small>
                      </div>
                      <div class="form-group">
                           
                        <label for="exampleInputEmail1">IATA CODE</label>
                        
                        <input type="text" class="form-control" name="iata_code" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter IATA CODE">
                        
                      </div>
                      <div class="form-group">
                           
                        <label for="exampleInputEmail1">Country</label>
                        
                        <input type="text" class="form-control" name="country" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Country">
                        <small id="emailHelp" class="form-text text-muted">What country is the airport located </small>
                      </div>
                      <div class="form-group">
                           
                        <label for="exampleInputEmail1">State</label>
                        
                        <input type="text" class="form-control" name="state" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter State" >
                        
                      </div>
                      
                        
                       
                      </fieldset>
                      <a href="{{url('/')}}" class="btn btn-danger">Back</a>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                    
                  </form>
            </div>
        </div>
    </div>
    
    
    
    
    