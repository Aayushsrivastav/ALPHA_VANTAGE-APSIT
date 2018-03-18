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

* {
  .border-radius(0) !important;
}

#field {
    margin-bottom:20px;
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
 
<div class="container mt-3">
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          TPO Cordinator
        </a>
      </div>
      <div id="collapseOne" class="collapse show">
        <div class="card-body">
         
		 <form  action="/drivecreation.php">
		<div id="section11" style="padding-top:70px;padding-bottom:70px">
		<h3 style="color: #E57C29;text-align:center">Enter Company Name and Date</h3>
		  <div class="form-group">
			<input type="text" class="form-control transparent-input" id="Cmpname" name="cmpname" placeholder="Company Name">&nbsp
			<input type="date" class="form-control transparent-input"  id="date" name="date" placeholder="Date">&nbsp
		 <button type="button" class="btn btn-info mt-3">Edit</button>
		  <button type="button" class="btn btn-info mt-3 ml-3">Save</button>
		 </div>
		 </div>
		 </form>
		 
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
		<form class="form-inline" action="/action_page.php"> Eligibility Criteria
    <input class="form-control mr-sm-2 ml-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
      </a>
      </div>
      <div id="collapseTwo" class="collapse">
        <div class="card-body">
         <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div id="section11" style="padding-top:70px;padding-bottom:70px">
		<h3 style="color: #E57C29;text-align:center">Enter Criterias</h3>
		  <div class="form-group">
			<input type="number" class="form-control transparent-input" onkeyup="myFunction()" id="percentage" name="percentage" placeholder="Enter Percentage">&nbsp
			<input type="number" class="form-control transparent-input"  id="SEM1" name="SEM1" placeholder="Enter SEM1 CGPA">&nbsp
		 </div>
		 </div>
		 </form>
			
		 <div class="container-fluid ">
<div class="row">
	
	<?php 
			
			foreach($result as $row){ 
			if($row['vald']=='valid'){
	?>
	
	
  <div class="card col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2 mt-3 ml-3" id="card" style="width:200px">
    <img class="card-img-top" src="image/<?php echo $row['photo'] ?>" alt="Card image" style="width:100%">
    <div class="card-body" style="width:100%">
      <h3 class="card-title"><?php echo $row['name']; ?></h3>
	  <button type="button" class="btn btn-info">Accept</button>
    </div>
  </div>
	
	
	<?php }} ?>
  </div>
			 
  </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Enter The No of Rounds
        </a>
      </div>
      <div id="collapseThree" class="collapse">
        <div class="card-body">
          
		  
		  <div class="container">
	<div class="row">
		<input type="hidden" name="count" value="1" />
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Nice Multiple Form Fields</label>
            <div class="controls" id="profs"> 
                <form class="input-append">
                    <div id="field"><input autocomplete="off" class="input" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/><button id="b1" class="btn add-more" type="button">+</button></div>
                </form>
            <br>
           <button type="button" class="btn btn-info mt-3 ml-3">Save</button>
            </div>
        </div>
	</div>
</div>

<script type="text/javascript">
		 $(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    

    
}); 
</script>
		  
        </div>
      </div>
    </div>
  </div>
</div>
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
</body>
</html>