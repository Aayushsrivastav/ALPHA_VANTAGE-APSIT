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
				
			$moodid= $_POST['form'];
			
			

				$sql="update user set vald='valid' where moodleid = '$moodid' ";
				$result=$conn->query($sql);
				
				if($result==true){
					echo "<script type='text/javascript'>window.location='http://localhost/hac_apsit/TPO.php';</script>";
				}
				else{
					echo "<script>window.alert('Failed');</script>";
					echo "<script type='text/javascript'>window.location='http://localhost/hac_apsit/TPO.php';</script>";
				}
?>