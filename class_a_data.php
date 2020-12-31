<?php

include 'class_server.php';

if (isset($_POST['submit'])){
	$standard = $_POST['standard'];

	

	$sql = mysqli_query($conn,"INSERT INTO class_a (standard) VALUES('$standard')");

	header('location: class_a_form.php');
}
?>
