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
 
 $MoodleID = ''; 
if( isset( $_POST['moodle_id'])) {
    $MoodleID = $_POST['moodle_id']; 
} 
 
 $sql = "INSERT into tpo(moodle_id)VALUES($MoodleID)";echo $sql;
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($result){
		echo "<script type='text/javascript'>window.location='http://localhost/hac_apsit/Index.html';</script>";
	}else{
		echo "<script type='text/javascript'>window.alert('Unable to register');</script>";
	}
?>