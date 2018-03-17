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
 $db_select = mysqli_select_db($conn,'placementportal');
 if (!$db_select) {
    die("Database selection failed: ".mysqli_error());
 }
	
	if(isset($_POST['upload']))
{
	
	$file_path=$_FILES['pdf']['tmp_name'];
	$file_type=$_FILES['pdf']['type'];
	$file_size=$_FILES['pdf']['size'];
	$file_name=$_FILES['pdf']['name'];
	
	$data = mysqli_real_escape_string ($conn,file_get_contents($file_path));
		
	$sql = "INSERT into user(moodleid,stdres)VALUES(15154,".$data.")";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	}
 mysqli_close($conn);
?>
