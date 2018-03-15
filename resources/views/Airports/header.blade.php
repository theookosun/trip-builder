<html> 
    <head>
        <title> Trip Builder Application</title>
        <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrapv.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" />
        <script type="text/javascript" src="{{ url('/js/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{url('/js/bootstrap.js')}}"></script>
        
    </head>
        
    <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Trip Builder</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarColor03">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('/addairports')}}">Add Airport</a>
                        </li>
                        
                        
                      </ul>
                      
                    </div>
                  </nav>
    