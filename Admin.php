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


<?php
  $usersIDs = array('user1');
  $driversIDs = array('driver1', 'driver2');
  $adminIDs = array('boss');
  $userKeys = array('1');
  $driverKeys = array('2');
  $AdminIDs = array('3');

  $driverRatings = array('driver1' => 5,'driver2' => 1);
  $userRatings = array('user1' => 5);

  $AnnualRev = 1000;

  function calcRevenue($tripCost){
    global $AnnualRev;
     return "$" . $AnnualRev = $AnnualRev + $tripCost;
  }

  function updateRatinguser($name, $rating){
    foreach ($userRatings as $key=> $score){
      if ($key == $name){
        $userRatings[$key][$score] = $userRatings[$key][$rating]; 
      }
    }
  }

  function updateRatingdriver($name, $rating){
    foreach($driverRating as $key => $score ){
      if ($key == $name){
        $dirverRatings[$key][$score] = $driverRatings[$key][$rating];
    }
  }
}

?>
<body>

<h2>Administrator</h2>
<p>
    Rideshare On Demand:
</p>

<div class="tab">
  <button class="tablinks" onmouseover="administration(event, 'Dashboard')">Dashboard</button>
  <button class="tablinks" onmouseover="administration(event, 'Account Manager')">Account Manager</button>
  <button class="tablinks" onmouseover="administration(event, 'Users')">List of Users</button>
  <button class="tablinks" onmouseover="administration(event, 'Ratings&Reviews')">Ratings</button>
  <button class="tablinks" onmouseover="administration(event, 'Scheduled Rides')">Scheduled Rides</button>
</div>
<!--Will add javascripts to handle data calculations for admin reports-->
<div id="Dashboard" class="tabcontent">
  <h3>Dashboard</h3>
  <p>Revenue</p>
  <?php echo calcRevenue(100);
  ?>
</div>

<div id="Account Manager" class="tabcontent">
  <h3>Account Manager</h3>
  <p></p> 
</div>

<div id="Users" class="tabcontent">
  <h3>Users</h3>
  <ul>
    <li>Users</li>
    <?php
      foreach($usersIDs as $i){
        echo $i . ", ";
      }
    ?>

    <li>Drivers</li>
    <?php
      foreach($driversIDs as $i){
        echo $i . ", ";
      }
    ?>
  </ul> 
  </p>
</div>

  <div id="Ratings&Reviews" class="tabcontent">
    <h3>User & Driver Ratings</h3>
     <p> Drivers: </p>

     <?php  
     foreach($driverRatings as $x => $val) {
       echo "ID: " . $x . " RATING: " . $val;
       echo "<br>";
     }
     ?>
     <p> Users: </p>

     <?php  
     foreach($userRatings as $x => $val) {
       echo "ID: " . $x . " Rating: " . $val;
       echo "<br>";
     }
     ?>

  </div>

  <div id="Scheduled Rides" class="tabcontent">
    <h3>Scheduled Rides</h3>
    <p>Future Scheduled Rides</p>
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
