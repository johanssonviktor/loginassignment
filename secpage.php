<?php
	session_start();
	if(!isset($_SESSION['id'])) { header('Location: index.php'); } // Created an if-statement to check if the user has the given id, if not the user is returned to the front page.

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Fun page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">		
</head>
<body>
	<div class="form-block">
	   <form action="logout.php">
	    <h1>Welcome to the secret page!</h1>    
	    <br><br><br>
	   <button id="button">LOG OUT</button>
	  </form>
	</div>
</body>
</html>