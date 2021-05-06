<head>
	<meta charset="UTF-8" />
	<title> Rideshare | Login </title>
	<link rel="stylesheet" href="loginstyle.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Space+Mono|Muli">
<style>
    
body {
  background-image: url('Uber-e1501253305999-916x515.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  font-family: Muli, sans-serif;
  font-size: 16px;
}

h1 {
  font-family: "Space Mono", monospace;
  font-size: 46px;
}

</style>
</head>
<body>
<div class = "loginPage">
	<div id ="heading">
	<header>
		<h1> Rideshare On Demand </h1>
	</header>
	</div>
	<section id="login">
	<div class="signin">

		<h2> Sign in </h2>
<?php
// define variables and set to empty values
$usersIDs = array('user1');
$driversIDs = array('driver1', 'driver2');
$adminIDs = array('boss');
$userKeys = array('1');
$driverKeys = array('2', '3');
$adminKeys = array('4');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$ID = $PSW = "";
  	$ID= test_input($_POST["userID"]);
 	$PSW = test_input($_POST["key"]);
	foreach($usersIDs as $x){
		foreach($userKeys as $y){
			if($x == $ID && $y == $PSW){
				header('location: home.php');
			}
		}
	}
	foreach($driversIDs as $x){
		foreach($driverKeys as $y){
			if($x == $ID && $y == $PSW){
				header('location: driverhomepage.php');
			}
		}
	}
	foreach($adminIDs as $x){
		foreach($adminKeys as $y){
			if($x == $ID && $y == $PSW){
				header('location: Admin.php');
			}
		}
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 }
?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="userID"><b>Username</b></label>
		<input type="text" id="userID" name="userID" required>
		<label for="key"><b>Password</b></label>
		<input type="password" id="key" name="key" required>
		<input type="submit" value="Submit">

<script>
	function validateSignIn() {
		//List of Users
		let userIDdata = ['user1'];
		let driverIDdata = ['driver1', 'driver2'];
		let AdminIDdata = ['boss'];
		let userPASSdata = ['1'];
        let driverPASSdata = ['2', '3'];
		let adminPASSdata = ['4'];

        var id = document.getElementById("userID").value;
		var pass = document.getElementByID("key").value;

		flagID = false;
		flagPass = false;
		
		for (i = 0; i < userIDdata.length; i++) {
			if (id.value.match(userIDdata[i])
				flagID = true;
		}
		for (i = 0; i < userPASSdata.length; i++){
			if (id.value.match(userPassdata[i])
				flagPass = true;
		}
		if (flagID = 'true' && flagPass = 'true') {
			alert("Successful");
			return true;
			}
		else {
			alert("Incorrect Login");
			return false;
			}
	};

</script>
</form>
		<hr>
		<h3> Not A Member? </h3>
<!--Will add verfication to logins-->
	</div>
	</section>
	

</div>
</body>
