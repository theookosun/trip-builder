@include('layouts.app')
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>Trip Builder</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.html">Home</a></li>
							
							<li><a href="flight.html">Flights</a></li>
							<li><a href="{{url('/view_airports')}}">Airports</a></li>
							
							
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
								      </li>
								      <li role="presentation">
								    	   <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a>
								      </li>
								   </ul>

                                   <!-- Tab panes -->
                                   <form method="POST" action="{{ url('/placesearch') }}"> {{ csrf_field() }}
                                        <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="flights">
                                            <div class="row">
                                                <div class="col-xxs-12 col-xs-6 mt">
                                                    <div class="input-field">
                                                        <label for="from">From:</label>
                                                        <input type="text" class="form-control" id="from-place" name="departure" placeholder="Los Angeles, USA"/>
                                                    </div>
                                                </div>
                                                <div class="col-xxs-12 col-xs-6 mt">
                                                    <div class="input-field">
                                                        <label for="from">To:</label>
                                                        <input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
                                                    </div>
                                                </div>
                                                <div class="col-xxs-12 col-xs-6 mt alternate">
                                                    <div class="input-field">
                                                        <label for="date-start">Check In:</label>
                                                        <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                    </div>
                                                </div>
                                                <div class="col-xxs-12 col-xs-6 mt alternate">
                                                    <div class="input-field">
                                                        <label for="date-end">Check Out:</label>
                                                        <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="col-xs-12">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Search Flight">
                                                </div>
                                            </div>
                                        
                                        </div>
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                                    
									
	</body>
</html>


