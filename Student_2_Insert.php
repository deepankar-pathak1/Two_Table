<?php

include 'stu_ser.php';

if (isset($_POST['submit'])){
	$student_id = $_POST['student_id'];
	$month = $_POST['month'];
	$fees = $_POST['fees'];
	
	

	$sql = mysqli_query($conn,"INSERT INTO new_student (student_id,month,fees) VALUES('$student_id','$month','$fees')");

	header('location: new_student.php');
}
?>
