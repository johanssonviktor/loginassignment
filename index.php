<?php
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">		
</head>
<body>
    <div class="form-block">
     <form action="login.php" method="POST">
     <h1>Welcome</h1>
     	<div class="form-input">
     		<input type="text" name="username" placeholder="Enter username">
     	</div>
     	<div class="form-input">
     		<input type="password" name="password" placeholder="Enter password">
     	</div>
     	<input id="button" type="submit" name="submit" value="LOGIN">

        <?php
          
          if (isset($_SESSION['id'])) {
             echo $_SESSION['id'];
          } else{
          	echo "You are not logged in!";
          }

        ?>

     	<br><br><br>
     	<p>Don't have an account? Sign up here!</p>
     	<a href="register.php">
     	<input id="btn-reg" type="text" name="change" value="REGISTER" formaction="register.php">
     	</a>
     </form>	
    </div>
</body>
</html>