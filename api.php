<?php 


?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<form class="login-form" name="login" id="152" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="text" placeholder="mobile no" name="mob" id="mob"><br><br>
			<button type="submit" name="sub" class="button2">Submit</button>
			<?php
if(isset($_POST['sub'])){
//include "connect.php";
//}
$mobn = $_POST['mob'];
$otp= rand(10000,99999);
			
			?>
			<input type="hidden" value="<?php  $otp ?>" name="otp">
	 	</form>
	</body>
</html>

<?php

//$sql = "select * from users where mobno = '".$mobn."'";
//$result = mysqli_query($conn,$sql);

//if($row = $result->fetch_assoc()){

$tee=file_get_contents("http://bhashsms.com/api/sendmsg.php?user=apsit&pass=apsit123&sender=APSITT&phone=".$mobn."&text=".$otp."&priority=ndnd&stype=normal");  

if ($tee == true) {
	echo "<script>window.alert('Msg sent succesful');";
	echo "<script type='text/javascript'>window.location='http://localhost/hac_apsit/confirm.php';</script>";
	
}

else 
	echo "<script>window.alert('No msg sent')";
	
	
//}
 
//    curl_setopt($ch, CURLOPT_HEADER, 0);   
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
//$output = curl_exec($ch);     
//curl_close($ch);  
// 
// Display MSGID of the successful sms push echo $output; 
}?>

