<!DOCTYPE HTML>  

<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
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
<?php
// define variables and set to empty values
$usernameerr = $passworderr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["username"])) {
    $usernameerr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $usernameerr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["password"])) {
    $passworderr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Rideshare Login</h2>
<h3>Please enter your username and password</h3>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $usernameerr;?></span>
  <br><br>
  Password: <input type="text" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passworderr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php 
if ($username = "user") 
{
    header('location: home.php');
} 
else if($username = "driver") 
{
    header('location: driverhomepage.php');
}
else if($username = "admin")
{
	header('location: adminhomepage.php');
}
?>

<?php
echo "<h2>Welcome</h2>";
echo $username;
echo "<br>";
?>

</body>
</html>
