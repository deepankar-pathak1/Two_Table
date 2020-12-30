<?php
include 'stu_ser.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>STUDENT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
</head>
<style>
  body{
	  margin:80px;
	  padding:15px 15px;
	      
	  color:black;
}
  
.form-control{
	font-family: 'Niconne', cursive;
	  font-size: 25px;
	      color: black;
		     
}  
h1{
	font-family: 'Langar', cursive;
	  font-size: 60px;
}
.button1{
	 margin-left:680px;
	    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
	  color: white;
	   cursor: pointer;
	    border-radius: 4px;
		 width: 42px;
  height: 42px;
      background-color: #28a745;
    border-color: #28a745;
}
</style>
<body>
<div class="container">
  <h1>Student Details</h1><br>
  <form method="POST" action="stu_insert.php">
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" id="name" placeholder="Name Please" name="name">
      </div>
      <div class="col">
        <input type="email" class="form-control" placeholder="Email Please" name="email">
      </div>
    </div>
 
  <br>
  
    <div class="form-row">
      <div class="col">
        <input type="number" class="form-control" id="number" placeholder="Enter Contact Number" name="phone">
      </div>
      <div class="col">
         <input type="number" class="form-control" id="standard" placeholder="Enter Class" name="standard">
      </div>
    </div>
	
	<br>

 

    
	<br>
	
	<button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
	
	<a href="stu_table.php" target="_blank" class="button button1">TABLE</a>
	
	
  </form>
</div>
</body>
</html>
