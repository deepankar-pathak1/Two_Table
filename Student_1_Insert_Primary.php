<?php

include 'stu_ser.php';

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$standard = $_POST['standard'];
	

	$sql = mysqli_query($conn,"INSERT INTO student (name,email,phone,standard) VALUES('$name','$email','$phone','$standard')");

	header('location: stu_form.php');
}
?>
