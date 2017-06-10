<?php
session_start();

include 'db.php';
include 'prep.php';

$userid = $_POST['username'];
$pwd = $_POST['password'];


//$sql = "SELECT * FROM user WHERE userid='$userid' AND pwd='$pwd'";
//$result = mysqli_query($mysqli, $sql);

/*
 Using an if statement to check if the user has typed in the correct information from the database.
 If it is correct you get logged in with a assigned id for the session.

*/

if (!$row = mysqli_fetch_assoc($result)) { 
    echo "Wrong username or password!";
} else {
	$_SESSION['id'] = $row['id'];
}

//header("Location: index.php");

?>