<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
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
	
$sql = "SELECT * FROM user WHERE vald ='not'";
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row = $result->fetch_assoc();
 $count = mysqli_num_rows($result);
	


//if($count==0){
//	
//	
//	
//     echo "<p style='text-align: center;color: black;font-style: bold; font-size: 30;'>Your username or password is incorrect!</p>";
//}
//else{
//	$_SESSION['id'] = $row['id'];
//	 header('location: student_home.php');
//}
	?>
	
	<table>
		<thead>
			<tr>
				<th> check</th>
				<th>moodleid</th>
				<th>Dob</th>
				<th>ssc</th>
				<th>hsc</th>
				<th>sem1</th>
				<th>sem2</th>
				<th>sem2</th>
				<th>sem2</th>
				<th>sem2</th>
				<th>sem2</th>
				<th>sem2</th>
				<th>sem2</th>
				
				
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach($result as $row){ ?>
			<tr>
				<td><input type="checkbox"></td>
				<td><?php echo $row['moodleid'];?></td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['ssc'];?></td>
				<td><?php echo $row['hsc'];?></td>
				<td><?php echo $row['sem1'];?></td>
				<td><?php echo "<a href='view.php?id=".$row['moodleid']."'>".$row['stdres'];""?></td>
				<td><?php echo $row['sem2'];?></td>
				<td><?php echo $row['sem2'];?></td>
				<td><?php echo $row['sem2'];?></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
<?php
 mysqli_close($conn);
?>
</body>
</html>