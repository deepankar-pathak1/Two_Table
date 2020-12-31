<?php


include 'class_a_server.php';



if(isset($_POST['submit'])){
	$id = $_POST['hdnid'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$drop_down = $_POST['drop_down'];
	
	
	 $sql = mysqli_query($conn,"UPDATE student_b SET name = '$name', email='$email', phone = '$phone' ,standard = '$drop_down' where id='$id' ");
	
	header("location: student_b_table.php");
	
}
?>
