<?php
session_start();
 $dbhost = 'localhost:3306';
 $dbuser = 'root';
 $dbpass = '';
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass);
 if(!$conn)
 {
 die('Could not connect: '.mysql_error());
 }
 $db_select = mysqli_select_db($conn,'dd');
 if (!$db_select) {
    die("Database selection failed: ".mysqli_error());
 }
 
 $MoodleID = $_POST['moodle_id']; 
 
 
 $sql = "INSERT into tpo(moodle_id)VALUES($MoodleID)";
 $result = mysqli_query($conn,$sql);
 mysqli_close($conn);
?>