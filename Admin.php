<?php
  echo "hello";
  $usersID = array('')
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
  display: none;
}

/* Clear floats after the tab */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<h2>Administrator</h2>
<p>
    Rideshare On Demand:
</p>

<div class="tab">
  <button class="tablinks" onmouseover="administration(event, 'Dashboard')">Dashboard</button>
  <button class="tablinks" onmouseover="administration(event, 'Account Manager')">Account Manager</button>
  <button class="tablinks" onmouseover="administration(event, 'Users')">Users</button>
  <button class="tablinks" onmouseover="administration(event, 'Map')">Map</button>
  <button class="tablinks" onmouseover="administration(event, 'Ratings&Reviews')">Ratings & Reviews</button>
  <button class="tablinks" onmouseover="administration(event, 'Scheduled Rides')">Scheduled Rides</button>
  <button class="tablinks" onmouseover="administration(event, 'Payments')">Payments</button>
</div>
<!--Will add javascripts to handle data calculations for admin reports-->
<div id="Dashboard" class="tabcontent">
  <h3>Dashboard</h3>
  <p>Revenue</p>
</div>

<div id="Account Manager" class="tabcontent">
  <h3>Account Manager</h3>
  <p></p> 
</div>

<div id="Users" class="tabcontent">
  <h3>Users</h3>
  <p>1.New Users
     2.Existing Users 
  </p>
</div>

<div id="Map" class="tabcontent">
    <h3>Map</h3>
    <p>Google Map</p>
  </div>

  <div id="Ratings&Reviews" class="tabcontent">
    <h3>Ratings & Reviews</h3>
    <p>1.Ratings 
       2.Reviews 
    </p>
  </div>

  <div id="Scheduled Rides" class="tabcontent">
    <h3>Scheduled Rides</h3>
    <p>Future Scheduled Rides</p>
  </div>

  <div id="Payments" class="tabcontent">
    <h3>Payments</h3>
    <p>1.Payment Managements
       2.Payment Methods
    </p>
  </div>

<div class="clearfix"></div>

<script>
function administration(evt, contentName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(contentName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>