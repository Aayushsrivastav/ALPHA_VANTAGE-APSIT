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
 

$moodleid = $_POST['MoodleID'];
$pass = $_POST['pwd'];
$name = $_POST['Name'];
$dob = $_POST['DOB'];
$mobno = $_POST['MobileNo'];
$email = $_POST['email'];
$ssc = $_POST['ssc'];
$sscfil = $_POST['file'];
echo $sscfil;
$hsc = $_POST['hsc'];
$hscfile = $_POST['HSCfile'];
$diploma = $_POST['diploma'];
$diplomafile = $_POST['Diplomafile'];
$livekt = $_POST['Livekt'];
$deadkt = $_POST['Deadkt'];
$sem1 = $_POST['sem1'];
$sem1file = $_POST['SEM1file'];
$sem2 = $_POST['sem2'];
$sem2file = $_POST['SEM2file'];
$sem3 = $_POST['sem3'];
$sem3file = $_POST['SEM3file'];
$ssc = $_POST['sem4'];
$sem4file = $_POST['SEM4file'];
$ssc = $_POST['sem5'];
$sem5file = $_POST['SEM5file'];
$ssc = $_POST['sem6'];
$sem6file = $_POST['SEM6file'];
$ssc = $_POST['sem7'];
$sem7file = $_POST['SEM7file'];
$ssc = $_POST['sem8'];
$sem8file = $_POST['SEM8file'];
$photo = $_POST['PassPhoto'];
$adhar = $_POST['Adhar'];
$carobj = $_POST['carrobj'];
$edqua = $_POST['edqua'];
$skills = $_POST['skills'];
$exp = $_POST['exp'];
$certtil = $_POST['certifytitle'];
$activity = $_POST['activity'];
$personal = $_POST['personal'];
$declare = $_POST['declare'];
$letter = $_POST['letter'];


//$sscfile = rand(1000,100000)."-".$_FILES['file']['name'];
//$sscfile_loc = $_FILES['file']['tmp_name'];
//$sscfile_size = $_FILES['file']['size'];
//$sscfile_type = $_FILES['file']['type'];
//$folder="uploads/";
//$new_file_name = strtolower($sscfile);
//$final_file=str_replace(' ','-',$new_file_name);
//	move_uploaded_file($sscfile_loc,$sscfolder.$final_file);
//
//$hsc = $_POST['HSC'];
//$hscfil = rand(1000,100000)."-".$_FILES['HSCfile']['name'];
//$hscfil_loc = $_FILES['HSCfile']['tmp_name'];
//$hscfil_size = $_FILES['HSCfile']['size'];
//$hscfil_type = $_FILES['HSCfile']['type'];
//$hscfolder="uploads/";
//$new_file_name = strtolower($hscfile);
//$final_file=str_replace(' ','-',$new_file_name);
//	move_uploaded_file($hscfil_loc,$hscfolder.$final_file);
//	
//$diploma = $_POST['diploma'];
//$diplomafile = rand(1000,100000)."-".$_FILES['SSCfile']['name'];
//$diplomafile_loc = $_FILES['Diplomafile']['tmp_name'];
//$diplomafile_size = $_FILES['Diplomafile']['size'];
//$diplomafile_type = $_FILES['Diplomafile']['type'];
//$diplomafolder="uploads/";
//$new_file_name = strtolower($diplomafile);
//$final_file=str_replace(' ','-',$new_file_name);
//	move_uploaded_file($diplomafile_loc,$sscfolder.$final_file);
//$diplomafile = $final_file;
	
	
	
	$sql = "INSERT into user(moodleid,pass,name,dob,mobno,email,ssc,sscfile,hsc,hscfile,diploma,diplomafile,livekt,deadkt,sem1,sem1file,sem2,sem2file,sem3,sem3file,sem4,sem4file,sem5,sem5file,sem6,sem6file,sem7,sem7file,sem8,sem8file,photo,adhar,carobj,edqua
	skills,exp,activity,personal,declare,letter)VALUES($moodleid,'$pass','$name','$dob','$mobno','$email','$ssc','$sscfil','$hsc','$hscfile','$diploma','$diplomafile','$livekt','$')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($result){
		echo "succes";
	}else{
		echo "fail";
	}
?>