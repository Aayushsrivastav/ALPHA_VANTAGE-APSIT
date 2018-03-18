<?php
	include "connect.php";

	$sql = "SELECT * FROM user";
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
  html, body {
  height: 100%;
}
.container-fluid {
  height: 100%;
  min-height: 100%;
  align: center
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
    <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
  </div>  
</nav>
 

<div class="container-fluid ">
<div class="row">
	
	<?php 
			foreach($result as $row){ 
			if($row['vald']=='invalid'){
	?>
	<form action="validate.php" method="post" class="col-sm-2">
	
  <div class="card col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 ml-3" style="width:200px">
    <img class="card-img-top" src="image/<?php echo $row['photo'] ?>" alt="Card image" style="width:100%">
    <div class="card-body" style="width:100%">
      <h3 class="card-title"><?php echo $row['name']; ?></h3>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
	  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#my<?php echo $row['moodleid']; ?>">View Profile</button>
    </div>
  </div>
	
	
	<div class="container">


  <!-- The Modal -->
  <div class="modal fade" id="my<?php echo $row['moodleid']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <img src="image/<?php echo $row['photo'] ?>" style="width: 200px; height: 230px;" alt="image">
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			
			<label><b>Name:</b></label><p><?php echo $row['name'] ?></p>
			<label><b>Email:</b></label><p><?php echo $row['email'] ?></p>
			<label><b>Mobile no:</b></label><p><?php echo $row['mobno'] ?></p>
			<label><b>Dob:</b></label><p><?php echo $row['dob'] ?></p>
			<label><b>Document:</b></label><a href="uploads/<?php echo $row['sscfile'] ?>"  target="_blank"><?php echo $row['sscfile'] ?></a>
			<br>
			<hr>
			
				<input type="hidden" value="<?php echo $row['moodleid']; ?>" name="form">
				<button class="btn" type="submit" value="<?php echo $row['moodleid']; ?>" name="form">Validate</button> 
			
        </div>
        
		  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  </div>
	</form>


	
	<?php }} ?>

 </div>
 </div>


</body>
</html>
