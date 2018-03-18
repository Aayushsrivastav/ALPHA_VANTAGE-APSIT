<?php
include "connect.php";
$pass2 = $_POST['pass2'];
$mob=$_POST['mob'];
if($_POST['otp']==$_POST['otp1']){

	$sql = "update user set pass = '".$pass2."' where mobno ='".$mob."'";
	if(mysqli_query($conn,$sql);)
	?>
	<script>
		window.alert("Password updated");
		header("location: Index.html")
</script>
<?php
}
else{
	?>
	<script>
		window.alert("Otp is wrong");
		header("location: Index.html")
</script>
<?php
}
?>