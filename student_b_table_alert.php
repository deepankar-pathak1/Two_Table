<a onclick="return confirm('ARe sure want to remove');">remove</a>

var confirmed = confirm('whatever');
return confirmed;

--------------------------------------------------------

<td ><a onclick="return confirm('You want to delete');" href="student_b_table.php?id=<?php echo $var['id']?>" class='btn btn-danger'>DELETE</a></td>

<script type="text/javascript">
	var confirmed = confirm('whatever');
return confirmed;
</script>

--------------------------------------------------------------

<?php


include 'class_a_server.php';


if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = mysqli_query($conn,"DELETE from student_b where id = '$id'");
}


$sql = mysqli_query($conn,"select * from student_b");

?>


<!DOCTYPE html>
<html>
<head>
	
	<title>STUDENT_B_TABLE</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong">
 <style>
 	
 	body{
 		margin:70px;
 		padding: 10px 10px;
 		       background: #eee;
 	}

 	h1{
 		font-size: 50px;
       text-align: center;
}

table{
	    background-color: #eee;
}

.table-bordered{
	    border: 2px solid #0c0000;
}
 </style>

</head>
<body>
<form method="POST" action="">
<h1>STUDENT_B_TABLE</h1><br>

<table class="table table-bordered table-striped">
<tr>
	<td>Name</td>
	<td>E-Mail</td>
	<td>Contact-No</td>
	<td>Class</td>
	
	<td width="70px">Delete</td>
	<td width="70px">Edit Class</td>
</tr>

<?php while($var=$sql->fetch_assoc()){?>
	<tr>
		<td><?php echo $var['name']?></td>
		<td><?php echo $var['email']?></td>
		<td><?php echo $var['phone']?></td>
		<td><?php echo $var['standard']?></td>
		
		<td ><a onclick="return confirm('You want to delete');" href="student_b_table.php?id=<?php echo $var['id']?>" class='btn btn-danger'>DELETE</a></td>
		<td><a onclick="return confirm('Wana Edit This ?');" href="student_b_edit.php?id=<?php echo $var['id']?>" class='btn btn-info'>EDIT CLASS</a></td>



	</tr>
	<?php } ?>



</table>
</form>
</body>

<script type="text/javascript">
	var confirmed = confirm('whatever');
return confirmed;
</script>


</html>
