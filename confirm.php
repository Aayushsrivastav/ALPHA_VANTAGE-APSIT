<html>
<body>
	<form action="Index.html" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="pass2"  id="pass2" placeholder="Enter new password" required>
		<input type="text" name="otp1" id="otp1" placeholder="OTP" required>
		<button type="submit" name="csub">Change password</button>
	</form>
	</body>
</html>
<?php 

include "connect.php";

	$otp=$_POST['otp'];
	$mob = $_POST['mob'];
	$otp1 = $_POST['otp1'];
	$pass2 = $_POST['pass2'];

	if($otp == $otp1){
	$sql = "update user set pass='$pass2'";
	$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
	}else{
		echo "wrong input";
	}


?>
