<?php

include 'class_server.php';

if (isset($_POST['submit_b'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$drop_down =  $_POST['drop_down'];
	

	$sql = mysqli_query($conn,"INSERT INTO student_b (name,email,phone,standard) VALUES('$name','$email','$phone','$drop_down')");

	header('location: student_b_form.php');
}
?>



