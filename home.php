<!DOCTYPE html>
<?php
	require 'conn.php';
	session_start();
	
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
<?php
if (isset($_SESSION['username'])) {
    $gebruikersnaam = $_SESSION['username'];
    $wachtwoord = $_SESSION['password'];
    $message = "Het spel kan beginnen!";
} else {
    $message = "U bent niet ingelogd. Log in om verder te gaan.";
    $gebruikersnaam = "username";
    $wachtwoord = "password";
}
?>
	<div>
		<h3 class="text-primary">PHP - Login and Registratie Page</h3>
		<hr style="border-top:1px dotted #ccc;"/>
			<div>
			<h3>Welkome op de homepagina! <br>
		U bent ingelogd</h3>
  
    </form>
			<br />
			<a href="logout.php">Logout</a>
		
	</div>
</body>
</html>