<?php
	$conn = mysqli_connect("91.215.216.34:3306", "vratsad", "ProgramistB@c3", 'vratsad_billionaire');

	if(!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>

