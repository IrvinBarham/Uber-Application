<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8" />
    <title>Ride Share App</title>
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<title>Find A Ride</title>	
<style>
body {
  color: #5bc0de;
  font-family: "Poppins", sans-serif;
}
.fa-map-marker-alt,
.fa-dot-circle {
  color: #5bc0de;
}
/*Jumbotron*/
.jumbotron {
  background-color: transparent;
  margin: 0;
  padding: 10px;
}
.jumbotron h1 {
  letter-spacing: 2.5px;
  font-size: 3.5em;
}
.jumbotron h1,
.jumbotron p {
  text-align: center;
}
/*map*/
#googleMap {
  width: 80%;
  height: 400px;
  margin: 10px auto;
}
/*output box*/
#output {
  text-align: center;
  font-size: 2em;
  margin: 20px auto;
}
#mode {
  color: black;
}
#results {
         display:none;
       }
</style>
<body>
  
    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Find The Distance Between Two Places.</h1>
            <p>This App Will Help You Calculate Your Travelling Distances.</p>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="from" class="col-xs-2 control-label"><i class="far fa-dot-circle"></i></label>
                    <div class="col-xs-4">
                        <input type="text" id="from" placeholder="Origin" class="form-control">
                    </div>
               </div>
               <div class="form-group">
                
                    <label for="to" class="col-xs-2 control-label"><i class="fas fa-map-marker-alt"></i></label>
                    <div class="col-xs-4">
                        <input type="text" id="to" placeholder="Destination" class="form-control">
                    </div>
                  
                 </div>
                 
            </form>
            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-info btn-lg " onclick="calcRoute();"><i class="fas fa-map-signs"></i></button>
            </div>
        </div>
        <div class="container-fluid">
            <div id="googleMap">
            </div>
            <div id="output">
            </div>
        </div>
    </div>
</head>
<div class="page">
    <div id="head">
        <header>
            <a href="Home.php"><strong>Home</strong></a>
            <a href="UserProfile.php"><strong>Profile</strong></a>
        </header>
    </div>
   
</div> 
</head>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-body text-center mt-5">
            <h1 class="heading display-5 pb-3">Tip Calculator</h1>
            <form id="tip-form">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="number" class="form-control" id="billTotal" placeholder="Total Bill">
                </div>
              </div>
              <div class="form-group tipPersent">
                <div class="input-group">
                  <label for="">Tip:</label>
                  <input type="range" class="form-control" id="tipInput" value="0">
                  <span class="input-group-addon" id="tipOutput"></span>
                </div>
              </div>
            </form>
            <hr>
            <!-- RESULTS -->
            <div id="results" class="pt-4">
              <h5>Results</h5>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Tip amount</span>
                  <input type="number" class="form-control" id="tipAmount" disabled>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Total Bill with Tip</span>
                  <input type="number" class="form-control" id="totalBillWithTip" disabled>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div>
    	<div>
        	<h2>Favorite Locations</h2>
        </div>
        <p>Add any location to Favorites for quick access!</p>
   	</div>
    <form class="form-horizontal">
                <div class="form-group">
                    <label for="favorites" class="col-xs-2 control-label"><i class="far fa-dot-circle"></i></label>
                    <div class="col-xs-4">
                        <input type="text" id="favorites" placeholder="Search Locations" class="form-control">
                       <input type="button" value="Submit" onClick="pr()"> 
                       <div>
                       Favorites: <span id="result"></span>
                       
                
                <script>
          function pr() {
            document.getElementById("result").innerHTML = document.getElementById('favorites').value;
          }
        </script>
                    
               </div>
               </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxuh-Yl-HLbkTCGiqRlwL1qTJEvrl6L0w&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Scripts/jquery-3.1.1.min.js"></script>
   
<script>
var myLatLng = { lat: 41.8781, lng: 87.6298 };
var mapOptions = {
    center: myLatLng,
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};
//create map
var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
//create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();
//create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();
//bind the DirectionsRenderer to the map
directionsDisplay.setMap(map);
//define calcRoute function
function calcRoute() {
    //create request
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
        unitSystem: google.maps.UnitSystem.IMPERIAL
    }
    //pass the request to the route method
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            //Get distance and time
            const output = document.querySelector('#output');
            output.innerHTML = "<div class='alert-info'>From: " + document.getElementById("from").value + ".<br />To: " + document.getElementById("to").value + ".<br /> Driving distance <i class='fas fa-road'></i> : " + result.routes[0].legs[0].distance.text + ".<br />Duration <i class='fas fa-hourglass-start'></i> : " + result.routes[0].legs[0].duration.text + ".</div>";
            //display route
            directionsDisplay.setDirections(result);
        } else {
            //delete route from map
            directionsDisplay.setDirections({ routes: [] });
            //center map in London
            map.setCenter(myLatLng);
            //show error message
            output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> Could not retrieve driving distance.</div>";
        }
    });
}
//create autocomplete objects for all inputs
var options = {
    types: ['(cities)']
}
var input1 = document.getElementById("from");
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);
var input2 = document.getElementById("to");
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);
var input3 = document.getElementById("favorites");
var autocomplete3 = new google.maps.places.Autocomplete(input3, options);
//tip calculator
document.querySelector('#tip-form').onchange = function(){
var bill = Number(document.getElementById('billTotal').value);
var tip = document.getElementById('tipInput').value;
document.getElementById('tipOutput').innerHTML = `${tip}%`;
var tipValue = bill * (tip/100)
var finalBill = bill + tipValue
console.log(finalBill)
var tipAmount = document.querySelector('#tipAmount')
var totalBillWithTip = document.querySelector('#totalBillWithTip')
tipAmount.value = tipValue.toFixed(2);
totalBillWithTip.value =finalBill.toFixed(2);
//Show Results
document.getElementById('results').style.display='block'
}
//add favorite locations

</script>
  </body>
</html>
