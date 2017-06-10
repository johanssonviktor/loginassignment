<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">		
</head>
<body>
    <div class="form-block">
     <form action="reggdata.php" method="POST">
     <h1>SIGNUP</h1>
     	<div class="form-input">
     		<input type="text" name="username" placeholder="Enter username" required="required"> <!-- Used the requierd method so that the user can't register without enter all the input fields-->
     	</div>
     	<div class="form-input">
     		<input type="password" name="password" placeholder="Enter password" required="required">
     	</div>
        <div>
            <input type="email" name="email" placeholder="Enter your E-mail address" required="required">
        </div>
        <br><br><br>
     	<input id="btn-reg" type="submit" name="submit" value="REGISTER">
     </form>	
    </div>
</body>
</html>