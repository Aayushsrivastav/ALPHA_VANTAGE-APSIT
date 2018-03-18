<?php
	include "connect.php";
	$tmp = $_SESSION['moodleid'];
	$sql = "SELECT * FROM user where moodleid ='$tmp'";
	$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
	$row = $result->fetch_assoc();


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
	.parallax1 {
    /* The image used */
    background-image: url("rado.webp");

    /* Set a specific height */
    min-height: 1000px; 
	
	
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.transparent-input {
   background-color: rgba(0, 0, 0, 0);
   border:none;
}

input::-webkit-input-placeholder {
color: #E57C29 !important;
}

textarea::placeholder {
color: #E57C29 !important;
}

input, select, textarea{
    color: #E57C29 !important;
}

textarea:focus, input:focus {
    color: #ff0000;
} 

  </style>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="#">
    <img src="LOGO.png" alt="Logo" style="width:40px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Home.html">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PROFILE</a>
      </li>  
    </ul>
  </div>  
</nav>

<div class="parallax1"><div class="container">
<img class="card-img-top mt-3" src="image/<?php echo $row['photo']; ?>" alt="Card image" style="width:25%"><br>

	
	  <div id="section11" style="padding-top:70px;padding-bottom:70px">
  <h1 style="color: #E57C29;text-align:center">Personal Details</h1>
  <div class="form-group">
  <form action="profileedit.php" method="post">

    <input type="number" class="form-control transparent-input" id="moodleid" name="moodleid" placeholder="MoodleID" value="<?php echo $row['moodleid'];?>">&nbsp
    <input type="password" class="form-control transparent-input"  id="pwd" name="pwd" placeholder="Password" value="<?php echo $row['pass'];?>">&nbsp
    <input type="text" class="form-control transparent-input" id="Name" name="Name" placeholder="Name" value="<?php echo $row['name'];?>">&nbsp
    <input type="date" class="form-control transparent-input" id="DOB" name="DOB" placeholder="Date of Birth" value="<?php echo $row['dob'];?>">&nbsp
    <input type="number" class="form-control transparent-input" id="MobileNo" name="MobileNo" placeholder="MobileNo" value="<?php echo $row['mobno'];?>">&nbsp
    <input type="email" class="form-control transparent-input" id="email" name="email" placeholder="Email@abcc.com" value="<?php echo $row['email'];?>">&nbsp
	<h1 style="color: #E57C29;text-align:center">Education Details</h1>
    <input type="number" class="form-control transparent-input" id="SSC" name="SSC" placeholder="SSC %" value="<?php echo $row['ssc'];?>">&nbsp
	<input type="number" class="form-control transparent-input" id="HSC" name="HSC" placeholder="HSC %" value="<?php echo $row['hsc'];?>">&nbsp
	<input type="number" class="form-control transparent-input" id="sem1" name="sem1" placeholder="SEM1 CGPA" value="<?php echo $row['sem1'];?>">&nbsp
	<input type="number" class="form-control transparent-input" id="sem2" name="sem2" placeholder="SEM2 CGPA" value="<?php echo $row['sem2'];?>">&nbsp
 
  <button type="submit" class="btn btn-info mt-3 ml-3">Save</button>
	</form>
	   </div>
  </div>
  <div class="container" style="height:100px;"></div>
  </div>
  </div>








</body>
</html>
