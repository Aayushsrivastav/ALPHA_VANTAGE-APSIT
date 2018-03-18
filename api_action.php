
<?php
include "connect.php";
$mobn = $_POST['mob'];
$otp= rand(10000,99999);

if(isset($_POST['sub'])){
$Queryid=file_get_contents("http://bhashsms.com/api/sendmsg.php?user=apsit&pass=apsit123&sender=APSITT&phone=".$mobn."&text=Otp is ".$otp."&priority=ndnd&stype=normal");  
header("location: confirm.php");
}

?>