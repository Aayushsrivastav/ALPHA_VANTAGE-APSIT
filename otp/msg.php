<?php

 $string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string_shuffled = str_shuffle($string);
    $password = substr($string_shuffled, 1, 4);
    $phone= $_POST['phone'];

    $tee=file_get_contents("http://bhashsms.com/api/sendmsg.php?user=apsit&pass=apsit123&sender=APSITT&phone=".$phone."&text=".$password."&priority=ndnd&stype=normal");

   // file_get_contents("http://login.smsgatewayhub.com/smsapi/pushsms.aspx?user=abc&pwd=$password&to=919898123456&sid=senderid&msg=test%20message&fl=0");

if ($tee == true) {
	echo "Msg sent succesful";
}

else 
	echo "No msg sent";
    // $password = base64_encode($password);
    // $query = mysql_query("UPDATE user_login SET password='".$password."' WHERE username = 'ajai sandy' ");
    // $qry_run = mysql_query($query);

?>