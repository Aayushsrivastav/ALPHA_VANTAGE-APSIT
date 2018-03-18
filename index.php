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
	$user = $_POST['uname'];
$pass = $_POST['passwd'];
	
$sql = "SELECT * FROM user WHERE mobno='$user' AND pass='$pass'";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
if($row==0){
	echo "<script>window.alert('Username or password is incorrect')</script>";
	echo "<script type='text/javascript'>window.location='http://localhost/hac_apsit/Index.html';</script>";
}
else{
	$_SESSION['moodleid']=$row['moodleid'];
	$chck = $row['role'];
	if($chck=='officer'){
			echo "<script type='text/javascript'>window.location='http://localhost/hac_apsit/TPOdir.php';</script>";
		}
		else if($chck=='coord'){

			echo "<script type='text/javascript'>window.location='http://localhost/hac_apsit/TPO.php';</script>";
		}
		else if($chck =='student'){
			echo "<script type='text/javascript'>window.location='http://localhost/hac_apsit/Home.html';</script>";
		}
	
}
//	foreach($result as $row){ 
//		if($row['role']=='officer'){
//			echo "<script type='text/javascript'>window.location='http://localhost/hac_apsit/TPOdir.html';</script>";
//		}
//		else if($row['role']=='coord'){
//
//			echo "<script type='text/javascript'>window.location='http://localhost/hac_apsit/TPO.php';</script>";
//		}
//		else if($row['role']=='student'){
//			echo "<script type='text/javascript'>window.location='http://localhost/hac_apsit/Home.html';</script>";
//		}
//	}
//}

?>