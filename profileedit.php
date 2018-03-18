<?php

	include "connect.php";
	$tmp = $_SESSION['moodleid'];
	$sql = "SELECT * FROM user where moodleid ='$tmp'";
	$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
	$row = $result->fetch_assoc();



	$moodleid= $_POST['moodleid'];
	$pass= $_POST['pwd'];
	$name= $_POST['Name'];
	$dob= $_POST['DOB'];
	$mobno= $_POST['MobileNo'];
	$email= $_POST['email'];
	$ssc= $_POST['SSC'];
	$hsc= $_POST['HSC'];
	$sem1= $_POST['sem1'];
	$sem2= $_POST['sem2'];
	
	$sql = "update user set moodleid='$moodleid',pass='$pass',name='$name',dob='$dob',mobno='$mobno',email='$email',ssc='$ssc',hsc='$hsc',sem1='$sem1',sem2='$sem2' where moodleid='$tmp'";
	$result = mysqli_query($conn,$sql);
	header("location: Home.html");
	?>