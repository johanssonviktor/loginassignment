<?php
	session_start();
    session_destroy(); // Ending the session and removes the id that is given to the user.
    header("Location: index.php"); // return to the front page


?>