<?php
    include 'header.php';

?>
    <div class="form-block">
     <form action="prep.php" method="POST">
     <h1>Welcome</h1>
     	<div class="form-input">
     		<input type="text" name="username" placeholder="Enter username">
     	</div>
     	<div class="form-input">
     		<input type="password" name="password" placeholder="Enter password">
     	</div>
     	<input id="button" type="submit" name="submit" value="LOGIN">
          <br><br>


     	<br><br><br>
     	<p>Don't have an account? Sign up here!</p>
     	<a href="register.php">
     	<input id="btn-reg" type="text" name="change" value="REGISTER" formaction="register.php">
     	</a>
     </form>	
    </div>
</body>
</html>
