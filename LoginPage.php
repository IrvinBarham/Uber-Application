



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
	<form action="Home.php" onsubmit="return validateSignin()" method="post" required>
		<label for="userID"><b>Username</b></label>
		<input type="text" id="userID" name="userID" required>
		<label for="key"><b>Password</b></label>
		<input type="password" id="key" name="key" required>
		<input type="submit" value="Submit">

<script>
	function validateSignIn() {
		//List of Users
		let userIDdata = ['user'];
		let driverIDdata = ['driver'];
		let AdminIDdata = ['boss'];
		let userPASSdata = ['1'];
        let driverPASSdata = ['2'];
		let adminPASSdata = ['3'];

        var id = document.getElementById("userID").value;
		var pass = document.getElementByID("key").value;

		Boolean flagID = false;
		Boolean flagPass = false;
		
		for (i = 0; i < userIDdata.length; i++) {
			if (id.value.match(userIDdata[i])
				flagID = true;
		}
		for (i = 0; i < userPASSdata.length; i++){
			if (pass.value.match(userPassdata[i])
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