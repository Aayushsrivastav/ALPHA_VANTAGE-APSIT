<?php
include ("connection.php");
$MoodleID = $_GET['MoodleID'];
if(isset($_GET['Submit']))
{
   
	
	
//	echo $MoodleID;
	
   
	
	
	/*$sql1= mysqli_query($conn, "INSERT INTO tpo(moodle_id) 
	VALUES('$moodle_id);" ) or die(mysqli_error($conn));
 
    $conn1 = mysqli_connect("localhost", "root", "", "dd") or die("couldnt not connect");*/
    $query= "INSERT INTO tpo(moodle_id)
		VALUES ('$MoodleID')";
	       $result=mysqli_query($conn1,$query);
	
    


/*if(isset($_POST['Submit'])){
        $query="INSERT INTO signup(fname, lname, age,email, phone,uname,pswd,gender,city,condition)
		VALUES ('$firstname', '$lastname', '$age', '$email', '$pno', '$uname', '$pwd', '$gender', '$city', '$condition')";
	 //$result=
mysqli_query($conn,$query);
	
    }else
    {s
        echo "database not updated";
    }
  */  
	
	
 /*if($conn->query($result) === TRUE)
  {
      echo "Complaint Registered";
    }
    else
    {
        echo "ERROR <br>".$conn->error;
    }*/
	$conn->close();  
}
	
?>