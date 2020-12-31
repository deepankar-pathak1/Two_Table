<?php
include 'class_server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>STUDENT_B_FORM</title>
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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
</head>
<style>
  body{
	  margin:120px;
	  padding:15px 15px;
	      
	  color:black;
}
  
.form-control{
	font-family: 'Niconne', cursive;
	  font-size: 25px;
	      color: black;
		     
}  
h1{
	font-family: 'Big Shoulders Stencil Text', cursive;
font-family: 'Roboto Slab', serif;
	  font-size: 40px;
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
          background-color: #212529;
    border-color: #dae0e5;
}

.btn-success{
      background-color: #1d2124;
    border-color: #dae0e5;
}
</style>
<body>
<div class="container">
  <h1>STUDENT_B_DETAILS</h1><br>
  <form method="POST" action="student_b_insert.php">
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

         <form >
  Class:
  <select name="drop_down">
    <option >-- Select Class --</option>
    <?php
    
       
        $id = $_GET['id'];
        $records = "SELECT * FROM class_a";
        $query = mysqli_query($conn, $records);

      
        
       while ($row = mysqli_fetch_array($query)) {
echo '<option value="'.$row['id'].'">'.$row['standard'].'</option>';
}

echo '</select>';

?>  
 



<?php mysqli_close($conn);  ?>
      </div>
    </div>
	
	<br>

 

    
	<br>
	
	<button type="submit" class="btn btn-success" name="submit_b">SUBMIT</button>
	
	<a href="student_b_table.php" target="_blank" class="button button1">TABLE</a>
	
	
  </form>
</div>
</body>
</html>
