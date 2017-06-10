<?php
	session_start();
	include 'db.php';




    $userid = mysqli_real_escape_string($conn, $_POST['username']); // i added som safety to the user input given so that you can't typ sql commands in the input fields on the web page.
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);// So it's a safty measure for sql injektion.
    $salt = "hqb%$tcg*l"; // here i add my salt so that i can check if my hashed code mathes the user password.
    $pwd = $_POST['password'].$salt;

    /*
	Here i select the userinput given for trying to log in and checks if there is a match with the query function.
    And i use the verify function to check if my hashed code mathes with the user password.
    */

    $sql = "SELECT * FROM user WHERE userid='$userid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $hash_pwd = $row['pwd'];
    $hash = password_verify($pwd, $hash_pwd);

    /*
     Made an if statement to check if the hash is equal to the password given, if not the user will be geting back to the frontpage.
    */

    if ($hash == 0) {                            
    	header("Location: index.php");           
    	exit();                                   
    } else {

    /*

	Here i use a sql command to get the information from the database and se if there is a match in the result that i get back using the mysqli query.
	If there is a match the user will be given a session id and will be logged in and direkted to the secret page.
    */

    $sql = "SELECT * FROM user WHERE userid='$userid' AND pwd='$hash_pwd'";
    $result = mysqli_query($conn, $sql);


    /*
	Created an if statement to check if the user did enter the correct logininformation or not
	If the user entered the correct information he will receive an session id, and if not he will be directed back to the front page.

    */


    if (!$row = mysqli_fetch_assoc($result)) {
    	echo "Wrong username or password";
    } else {
    	$_SESSION['id'] = $row['id'];
    }

       header("Location: secpage.php"); 
    }







?>