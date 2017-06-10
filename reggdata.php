<?php
	session_start();  //Keeping the session id
	include 'db.php'; //including the code from the db page.
    
	/*
	Creating variables to hold the user input.
	Then i added som safty measures, i hashed the password and added salt -
	so that it would be more difficult to get the password from the database.
	Then i used the sql command INSERT to place the user input in the users table inside my database.
	Then i query my sql code into the database with mysqli_query.
	*/

    $userid = $_POST['username'];
    $pwd = $_POST['password'];
    $email = $_POST['email'];

    $salt = "hqb%$tcg*l";
    $pwd = $_POST['password'].$salt;

    $enc = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (userid, pwd, email) VALUES ('$userid', '$enc', '$email')";
    $result = mysqli_query($conn, $sql);



    header("Location: index.php");


?>