<?php
  session_start();  // Starting the sessinon with the user id saves in the memory and the session will last till it gets destroyed when the user logs out.
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
     <form action="login.php" method="POST"> <!--Putting the method POST so that the information is not shown in the url-->
     <h1>Welcome</h1>
     	<div class="form-input">
     		<input type="text" name="username" placeholder="Enter username">
     	</div>
     	<div class="form-input">
     		<input type="password" name="password" placeholder="Enter password">
     	</div>
     	<input id="button" type="submit" name="submit" value="LOGIN">
          <br><br>
        <?php
           /*
        
            Made an if statement that checks if the user is logged in or not and gives the user an session id.
          
           */
          /*if (isset($_SESSION['id'])) { 
             echo $_SESSION['id'];
          } else{
          	echo "<p id='logintext'>You are not logged in!</p>";
          }

          */

        ?>

     	<br>
     	<p>Don't have an account? Sign up here!</p>
     	<a href="register.php">
     	<input id="btn-reg" type="text" name="change" value="REGISTER" formaction="register.php">
     	</a>
     </form>	
    </div>
</body>
</html>