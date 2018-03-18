<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "dd";
// Create connection
$conn =  mysqli_connect($servername, $username, $password, $db) or die("coulnd not connect"); 
$db = mysqli_select_db($conn,'dd') or die("could not find database");

if($db)
	echo "success";
else
	echo "fail";

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
else
	echo "Connected successfully";
?>
